<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{


    public function checkWord(Request $request)
    {
        $request->input('word_id');

        $inputLetters = strtoupper($request->input('word'));

        $targetWord = Word::find($request->input('word_id'));

        $result = ($inputLetters === $targetWord->words);

        return response()->json(['result' => $result]);
    }

}
