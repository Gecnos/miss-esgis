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
                'photo_principale' => '/storage/media/aissatou.png',
                'bio' => 'Étudiante en droit international, passionnée par la défense des droits des femmes et des enfants.',
                'mot_de_passe' => bcrypt('password'),
                'statut' => 'active',
                'medias' => [
                    ['url' => '/placeholder.svg?height=300&width=300', 'type' => 'photo', 'date_upload' => now()],
                    ['url' => '/placeholder.svg?height=600&width=400', 'type' => 'video', 'date_upload' => now()],
                ]
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
