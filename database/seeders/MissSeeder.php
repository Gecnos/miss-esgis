<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Miss;
use App\Models\Media;

class MissSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Clear existing data
        Miss::truncate();
        Media::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $missesData = [
            [
                'first_name' => 'Sophie',
                'last_name' => 'Martin',
                'age' => 23,
                'city' => 'Paris',
                'country' => 'France',
                'email' => 'sophie.martin@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Étudiante en médecine à la Sorbonne, passionnée par la mode et l\'art contemporain. Je milite pour l\'accès aux soins dans les zones rurales et je pratique la danse classique depuis l\'âge de 5 ans.',
                'status' => 'active',
                'total_votes' => 1245,
                'medias' => [
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                    ['file_url' => '/placeholder.svg?height=600&width=400', 'type' => 'video', 'description' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'], // Example video URL
                ]
            ],
            [
                'first_name' => 'Amélie',
                'last_name' => 'Dubois',
                'age' => 20,
                'city' => 'Lyon',
                'country' => 'France',
                'email' => 'amelie.dubois@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Passionnée de technologie et de robotique, je rêve de créer des solutions innovantes pour un monde meilleur. Je suis également une grande lectrice de science-fiction.',
                'status' => 'active',
                'total_votes' => 987,
                'medias' => [
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                ]
            ],
            [
                'first_name' => 'Camille',
                'last_name' => 'Laurent',
                'age' => 25,
                'city' => 'Marseille',
                'country' => 'France',
                'email' => 'camille.laurent@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Artiste peintre et musicienne, je trouve mon inspiration dans la nature et les émotions humaines. Je crois en la puissance de l\'art pour connecter les gens.',
                'status' => 'active',
                'total_votes' => 756,
                'medias' => [
                    ['file_url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo'],
                ]
            ],
            [
                'first_name' => 'Emma',
                'last_name' => 'Leroy',
                'age' => 21,
                'city' => 'Nice',
                'country' => 'France',
                'email' => 'emma.leroy@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Adepte de sports extrêmes et de voyages, je cherche toujours à repousser mes limites. J\'aime découvrir de nouvelles cultures et partager mes expériences.',
                'status' => 'active',
                'total_votes' => 500,
                'medias' => []
            ],
            [
                'first_name' => 'Julie',
                'last_name' => 'Bernard',
                'age' => 22,
                'city' => 'Toulouse',
                'country' => 'France',
                'email' => 'julie.bernard@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Bénévole dans des associations caritatives, je suis engagée pour la justice sociale et l\'égalité. Je crois que chaque petite action peut faire une grande différence.',
                'status' => 'active',
                'total_votes' => 400,
                'medias' => []
            ],
            [
                'first_name' => 'Léa',
                'last_name' => 'Petit',
                'age' => 19,
                'city' => 'Bordeaux',
                'country' => 'France',
                'email' => 'lea.petit@example.com',
                'main_photo_url' => '/storage/miss_photos/6t1KWtWyM9c13hXvahaPrdc87OHiWcEdBIiyJEwZ.png',
                'short_presentation' => 'Future architecte, je suis fascinée par le design et la création d\'espaces qui inspirent. J\'aime dessiner et explorer de nouvelles formes d\'expression.',
                'status' => 'pending',
                'total_votes' => 0,
                'medias' => []
            ],
        ];

        foreach ($missesData as $missData) {
            $medias = $missData['medias'];
            unset($missData['medias']);

            $miss = Miss::create($missData);

            foreach ($medias as $mediaData) {
                $miss->medias()->create($mediaData);
            }
        }
    }
}
