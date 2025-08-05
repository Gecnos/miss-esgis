<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Miss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MissAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $miss = Miss::where('email', $request->email)->first();

        if ($miss && Hash::check($request->password, $miss->mot_de_passe)) {
            Auth::guard('miss')->login($miss);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Identifiants incorrects']);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'age' => 'required|integer|min:18|max:30',
            'pays' => 'required|string|max:100',
            'email' => 'required|email|unique:misses,email',
            'telephone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500',
            'photo_principale' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = $request->only(['nom', 'prenom', 'age', 'pays', 'email', 'telephone', 'bio']);
        $data['mot_de_passe'] = Hash::make($request->password);
        $data['statut'] = 'pending';

        if ($request->hasFile('photo_principale')) {
            $data['photo_principale'] = $request->file('photo_principale')->store('candidates', 'public');
        }

        $miss = Miss::create($data);

        return redirect()->route('login')->with('success', 'Inscription réussie. Votre candidature est en cours de validation.');
    }

    public function logout()
    {
        Auth::guard('miss')->logout();
        return redirect()->route('home');
    }
}
