<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
            [
                'word' => 'masa',
                'word_length' => 4,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Üzerinde çalışma yapılan mobilya',
            ],
            [
                'word' => 'telefon',
                'word_length' => 7,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'İletişim aracı',
            ],
            [
                'word' => 'pencere',
                'word_length' => 7,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Camlı açıklık',
            ],
            [
                'word' => 'kedi',
                'word_length' => 4,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Evcil hayvan',
            ],
            [
                'word' => 'sokak',
                'word_length' => 5,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Yol kenarı',
            ],
            [
                'word' => 'gözlük',
                'word_length' => 6,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Göz koruyucu',
            ],
            [
                'word' => 'bisiklet',
                'word_length' => 8,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Pedallı taşıt aracı',
            ],
            [
                'word' => 'yemek',
                'word_length' => 5,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Besin alımı',
            ],
            [
                'word' => 'yıldız',
                'word_length' => 6,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Gökyüzünde parlak nokta',
            ],
            [
                'word' => 'deniz',
                'word_length' => 5,
                'image' => 'https://placehold.co/450x450/EEE/31343C',
                'tips' => 'Büyük su kütlesi',
            ],
            // Diğer kelimeler ve ipuçları buraya eklenir...
        ];

        foreach ($words as $word) {
            DB::table('words')->insert([
                'words' => $word['word'],
                'word_length' => $word['word_length'],
                'image' => $word['image'],
                'tips' => $word['tips'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
