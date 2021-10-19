<?php

namespace FizzBuzz;

class FizzBuzz
{


    function checkForLucky($num) {
        return strpos((string)$num, '3' ) !== false ? "lucky" : $num;
    }


    public function outputFizzBuzz($start = null, $end = null)
    {

        //Check is integer
        if (!is_int($start) || !is_int($end)) {
            return "Invalid Range Whole Numbers Only Please";
        }

        //Check for max integer
        if ($start >= PHP_INT_MAX || $end >= PHP_INT_MAX) {
            return "Range too small or large";
        }

        //Check for min integer
        if ($start <= PHP_INT_MIN || $end <= PHP_INT_MIN) {
            return "Range too small or large";
        }

        $range = range($start, $end);
        $output = "";




        foreach ($range as $number) {


            if ($number % 3 == 0) {

                $this->checkForLucky($number) === "lucky" ? $output .="lucky" : $output .= "fizz";

            }

            if ($number % 5 == 0 && $number % 3 != 0) {
                //$output .= "buzz";
                $this->checkForLucky($number) === "lucky" ? $output .="lucky" : $output .= "buzz";
            }

/// Watch for 30s
            if ($number % 3 != 0 && $number % 5 != 0) {
                $this->checkForLucky($number) === "lucky" ? $output .="lucky":$output .= strval($number);
            }
            $output .= " ";

        }

        return rtrim($output . ' ');
    }

}

//Run from command line php -r 'include "./src/FizzBuzz.php"; use FizzBuzz\FizzBuzz; $fizzbuzz=new FizzBuzz(); print_r($fizzbuzz->outputFizzBuzz(1,20));'
//$fizzbuzz = new FizzBuzz();
//$result = $fizzbuzz->outputFizzBuzz(1,20);
//echo ($result);
