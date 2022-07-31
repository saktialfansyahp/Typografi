<?php

namespace App\Http\Controllers;

use App\Models\searchword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class searchwordfreeController extends Controller
{
    public function word(Request $request){

        $words = null;
        $jsonWords = null;

        if($request->has('search')){
            $words = explode(' ', $request->search);
            $jsonWords = searchword::select('katadasar')->whereIn('katadasar', $words)->get()->pluck('katadasar')->toArray();

            $words =  $this->wordsNotExist($words, $jsonWords);

        }

        return view ('welcome', [
            'words' => $words,
        ]);
    }

    private function wordsNotExist($searchWords, $existWord)
    {
        $notExist = [];

        foreach ($searchWords as $word) {
            if (! in_array($word, $existWord)) {
                $notExist[] = $word;
            }
        }

        return $notExist;
    }
}
