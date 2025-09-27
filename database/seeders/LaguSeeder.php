<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lagu;

class LaguSeeder extends Seeder
{
    public function run()
    {
        $lagu = [
            ['judul' => 'Perfect', 'penyanyi' => 'Ed Sheeran'],
            ['judul' => 'Someone You Loved', 'penyanyi' => 'Lewis Capaldi'],
            ['judul' => 'Drivers License', 'penyanyi' => 'Olivia Rodrigo'],
            ['judul' => 'Blinding Lights', 'penyanyi' => 'The Weeknd'],
            ['judul' => 'Watermelon Sugar', 'penyanyi' => 'Harry Styles'],
        ];

        foreach ($lagu as $item) {
            Lagu::create($item);
        }
    }
}
