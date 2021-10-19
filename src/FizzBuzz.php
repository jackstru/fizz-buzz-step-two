<?php

namespace FizzBuzz;

class FizzBuzz
{


    function checkForLucky($num) {
        return strpos((string)$num, '3' ) !== false;
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
            if($this->checkForLucky($number)) {
                $output .="lucky";
            }elseif($number % 15 == 0) {
                $output .= "fizzbuzz";
            }elseif($number % 3 == 0) {
                $output .= "fizz";
            }elseif($number % 5 == 0) {
                $output .= "buzz";
            }elseif($number % 3 != 0 && $number % 5 != 0) {
                $output .= strval($number);
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
