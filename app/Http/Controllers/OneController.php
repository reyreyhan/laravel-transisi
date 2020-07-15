<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    public function testScores() {
        return view('one.test-scores');
    }

    public function testScoresPost(Request $request) {
        $value = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
        $tempValue = explode(" ", $value);

        if ($request->feature == 1) {
            $value = 0;
            for ($i = 0; $i < count($tempValue); $i++) {
                $value = $value + $tempValue[$i];
            }
            $average = $value / count($tempValue);
            echo "The Average is " . $average;
        } else if ($request->feature == 2) {
            rsort($tempValue);
            $highestScore = [];
            for ($i = 0; $i < 7; $i++) {
                $highestScore[$i] = $tempValue[$i];
            }

            echo "7 Highest Scores is " . join(" ", $highestScore);
        } else if ($request->feature == 3) {
            sort($tempValue);
            $lowestScore = [];
            for ($i = 0; $i < 7; $i++) {
                $lowestScore[$i] = $tempValue[$i];
            }

            echo "7 Lowest Scores is " . join(" ", $lowestScore);
        }
    }
}
