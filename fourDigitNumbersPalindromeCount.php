<?php

if (!function_exists('fourDigitNumbersPalindromeCount')) {
    /**
     * Function that returns array of palindrome digits between 1000 to 9999.
     *
     * @return array
     */
    function fourDigitNumbersPalindromeCount() {
        $result = [];
        for ($i = 10; $i < 100; $i++) { 
            $strVal = strval($i);
            $array[] = intval($strVal . strrev($strVal));
        }
        return $array;
    }
}

echo count(fourDigitNumbersPalindromeCount());
