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

    public function findLower() {
        return view('one.find-lower');
    }

    public function findLowerPost(Request $request) {
        $lowerCount = strlen(preg_replace('![^a-z]+!', '', $request->word));
        echo '"' . $request->word . '"' . ' mengandung ' . $lowerCount . ' buah huruf kecil.';
    }

    public function word() {
        return view('one.word');
    }

    public function wordPost(Request $request) {
        $word = explode(" ", $request->word);

        echo "Unigram<br>";
        $unigramString = "";
        for ($i = 0; $i < count($word); $i++) {
            $unigramString = $unigramString . $word[$i] . ", ";
        }
        echo $unigramString;

        echo "<br><br>Bigram<br>";
        $bigramString = "";
        for ($i = 0; $i < count($word); $i++) {
            if ($i+1 < count($word)) {
                $bigramString = $bigramString . $word[$i] . " " . $word[$i+1] . ", ";
            } else {
                $bigramString = $bigramString . $word[$i] . ", ";
            }
            $i = $i+1;
        }
        echo $bigramString;

        echo "<br><br>Trigram<br>";
        $trigramString = "";
        for ($i = 0; $i < count($word); $i++) {
            if ($i+2 < count($word)) {
                $trigramString = $trigramString . $word[$i] . " " . $word[$i+1] . " " . $word[$i+2] . ", ";
            } else if ($i+1 < count($word)) {
                $trigramString = $trigramString . $word[$i] . " " . $word[$i+1] . ", ";
            } else {
                $trigramString = $trigramString . $word[$i] . ", ";
            }
            $i = $i+2;
        }
        echo $trigramString;

    }
}
