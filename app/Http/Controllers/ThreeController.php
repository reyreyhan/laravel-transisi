<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreeController extends Controller
{
    public function trueFalse() {
        return view('three.true-false');
    }

    public function trueFalsePost(Request $request) {
        $arr = [
            ['f', 'g', 'h', 'i'],
            ['j', 'k', 'p', 'q'],
            ['r', 's', 't', 'u']
        ];

        $stringSplit = str_split($request->word);
        $trueCheck = [];

        for ($s = 0; $s < count($stringSplit); $s++) {
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = 0; $j < count($arr[$i]); $j++) {
                    if ($arr[$i][$j] == $stringSplit[$s]) {
                        $trueCheck[$s] = true;
                    }
                }
            }
        }

        if (count($trueCheck) == count($stringSplit)) {
            echo "true";
        } else {
            echo "false";
        }
    }
}
