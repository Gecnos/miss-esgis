<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Miss;
use App\Models\Media;

class MissSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Miss::truncate();
        Media::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $missesData = [
            [
                'nom' => 'Mabika',
                'prenom' => 'Aïssatou',
                'age' => 22,
                'pays' => 'Sénégal',
                'email' => 'aissatou.mabika@example.com',
                'telephone' => '+221772345678',
                'photo_principale' => '/storage/miss_photos/aissatou.png',
                'bio' => 'Étudiante en droit international, passionnée par la défense des droits des femmes et des enfants.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => [
                    ['url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo', 'date_upload' => now()],
                    ['url' => '/placeholder.svg?height=600&width=400', 'type' => 'video', 'date_upload' => now()],
                ]
            ],
            [
                'nom' => 'N’Guessan',
                'prenom' => 'Clarisse',
                'age' => 24,
                'pays' => 'Côte d’Ivoire',
                'email' => 'clarisse.nguessan@example.com',
                'telephone' => '+2250701020304',
                'photo_principale' => '/storage/miss_photos/clarisse.png',
                'bio' => 'Ingénieure en informatique, spécialisée dans l’intelligence artificielle, elle milite pour plus de femmes dans la tech.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => [
                    ['url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo', 'date_upload' => now()],
                ]
            ],
            [
                'nom' => 'Okeke',
                'prenom' => 'Chimamanda',
                'age' => 21,
                'pays' => 'Nigeria',
                'email' => 'chimamanda.okeke@example.com',
                'telephone' => '+2348012345678',
                'photo_principale' => '/storage/miss_photos/chimamanda.png',
                'bio' => 'Étudiante en littérature anglaise, auteure de poèmes et fervente défenseuse de l’éducation pour les filles.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => []
            ],
            [
                'nom' => 'Bongongo',
                'prenom' => 'Déborah',
                'age' => 23,
                'pays' => 'RDC',
                'email' => 'deborah.bongongo@example.com',
                'telephone' => '+243820000000',
                'photo_principale' => '/storage/miss_photos/deborah.png',
                'bio' => 'Styliste et créatrice de mode, inspirée par les tissus traditionnels africains.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => []
            ],
            [
                'nom' => 'Zerbo',
                'prenom' => 'Salimata',
                'age' => 20,
                'pays' => 'Burkina Faso',
                'email' => 'salimata.zerbo@example.com',
                'telephone' => '+22670112233',
                'photo_principale' => '/storage/miss_photos/salimata.png',
                'bio' => 'Étudiante en agroécologie, engagée pour la protection de l’environnement et la sécurité alimentaire.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'pending',
                'medias' => []
            ],
            [
                'nom' => 'Domingo',
                'prenom' => 'Marie-jeanne',
                'age' => 23,
                'pays' => 'BENIN',
                'email' => 'Dmin.MJ@gmail.com',
                'telephone' => '+229820000000',
                'photo_principale' => '/storage/miss_photos/deborah.png',
                'bio' => 'Styliste et créatrice de mode, inspirée par les tissus traditionnels africains.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => []
            ],
        ];

        foreach ($missesData as $missData) {
            $medias = $missData['medias'] ?? [];
            unset($missData['medias']);

            $miss = Miss::create($missData);

            foreach ($medias as $mediaData) {
                $miss->medias()->create($mediaData);
            }
        }
    }
}
