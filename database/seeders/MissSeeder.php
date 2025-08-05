<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Miss;
use App\Models\Vote;

class MissSeeder extends Seeder
{
    public function run()
    {
        $candidates = [
            [
                'nom' => 'Martin',
                'prenom' => 'Sophie',
                'age' => 23,
                'pays' => 'Paris, France',
                'email' => 'sophie.martin@example.com',
                'telephone' => '+33 6 12 34 56 78',
                'bio' => 'Étudiante en médecine à la Sorbonne, passionnée par la mode et l\'art contemporain. Je milite pour l\'accès aux soins dans les zones rurales et je pratique la danse classique depuis l\'âge de 5 ans.',
                'photo_principale' => 'candidates/sophie-martin.jpg',
                'mot_de_passe' => Hash::make('password'),
                'statut' => 'active',
                'votes' => 1245
            ],
            [
                'nom' => 'Dubois',
                'prenom' => 'Amélie',
                'age' => 21,
                'pays' => 'Lyon, France',
                'email' => 'amelie.dubois@example.com',
                'telephone' => '+33 6 23 45 67 89',
                'bio' => 'Passionnée de photographie et de voyages, je souhaite utiliser ma notoriété pour sensibiliser à la protection de l\'environnement.',
                'photo_principale' => 'candidates/amelie-dubois.jpg',
                'mot_de_passe' => Hash::make('password'),
                'statut' => 'active',
                'votes' => 987
            ],
            [
                'nom' => 'Laurent',
                'prenom' => 'Camille',
                'age' => 24,
                'pays' => 'Marseille, France',
                'email' => 'camille.laurent@example.com',
                'telephone' => '+33 6 34 56 78 90',
                'bio' => 'Ingénieure en informatique le jour, artiste peintre le soir. Je rêve de créer une fondation pour l\'art thérapie.',
                'photo_principale' => 'candidates/camille-laurent.jpg',
                'mot_de_passe' => Hash::make('password'),
                'statut' => 'active',
                'votes' => 756
            ],
            [
                'nom' => 'Leroy',
                'prenom' => 'Emma',
                'age' => 22,
                'pays' => 'Nice, France',
                'email' => 'emma.leroy@example.com',
                'telephone' => '+33 6 45 67 89 01',
                'bio' => 'Étudiante en droit international, je souhaite œuvrer pour les droits des femmes dans le monde.',
                'photo_principale' => 'candidates/emma-leroy.jpg',
                'mot_de_passe' => Hash::make('password'),
                'statut' => 'active',
                'votes' => 623
            ],
            [
                'nom' => 'Bernard',
                'prenom' => 'Julie',
                'age' => 25,
                'pays' => 'Toulouse, France',
                'email' => 'julie.bernard@example.com',
                'telephone' => '+33 6 56 78 90 12',
                'bio' => 'Professeure des écoles et bénévole dans une association d\'aide aux devoirs. L\'éducation est ma passion.',
                'photo_principale' => 'candidates/julie-bernard.jpg',
                'mot_de_passe' => Hash::make('password'),
                'statut' => 'active',
                'votes' => 445
            ]
        ];

        foreach ($candidates as $candidateData) {
            $votes = $candidateData['votes'];
            unset($candidateData['votes']);
            
            $candidate = Miss::create($candidateData);
            
            // Créer les votes
            for ($i = 0; $i < $votes; $i++) {
                Vote::create([
                    'miss_id' => $candidate->id,
                    'moyen_paiement' => rand(0, 1) ? 'mobile_money' : 'carte_bancaire',
                    'montant' => 1.00,
                    'ip_adresse' => '127.0.0.1'
                ]);
            }
        }
    }
}
