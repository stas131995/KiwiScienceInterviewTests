<?php

if (!function_exists('sumOfDigitsDividedByThree')) {
    /**
     * Function that calculates the sum of  three-digit numbers divided by three.
     *
     * @return void
     */
    function sumOfDigitsDividedByThree() {
        $firstThreeDigitNumber = 100;
        $divideBy = 5;
        $lastThreeDigitNumber = 995;
        $count = (($lastThreeDigitNumber - $firstThreeDigitNumber) / $divideBy) + 1;
        return (($firstThreeDigitNumber + $lastThreeDigitNumber) / 2) * $count;
    }
}

echo sumOfDigitsDividedByThree();
