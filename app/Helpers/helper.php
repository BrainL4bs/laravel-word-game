<?php

namespace App\Helpers;

use App\Models\Word;
use Illuminate\Support\Facades\DB;

class helper
{
    public static function wordCheck()
    {
        // Words tablosundan rastgele bir kelime alalım
        $randomWord = Word::inRandomOrder()->first();

        // Kelimenin ID'sini döndürelim
        return $randomWord;
    }
}
