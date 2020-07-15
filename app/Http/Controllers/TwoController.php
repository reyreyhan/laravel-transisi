<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function encrypt() {
        return view('two.encrypt');
    }

    public function encryptPost(Request $request) {
        $stringSplit = str_split($request->word);
        $newString = [];
        for ($i = 0; $i < strlen($request->word); $i++) {
            if ($i % 2 == 0) {
                $ord = ord($stringSplit[$i]) + ($i+1);
                $newString[$i] = chr($ord);
            } else {
                $ord = ord($stringSplit[$i]) - ($i+1);
                $newString[$i] = chr($ord);
            }
        }
        echo "String Before Encrypt  : " . $request->word . "<br>";
        echo "String After Encrypt : " . join($newString);
    }
}
