<?php

namespace FizzBuzz\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;
require './src/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provideRanges
     */
    public function testFizzBuzzThreeFive($start, $end, $expected)
    {
        $fizzbuzz = new FizzBuzz();
        $output = $fizzbuzz->outputFizzBuzz($start, $end);
        $this->assertEquals(
            $expected,
            $output,
            "The output should equal {$expected}"
        );
    }

    public function provideRanges()
    {
        return [

            [PHP_INT_MIN, PHP_INT_MAX, "Range too small or large"],
            [null, null, "Invalid Range Whole Numbers Only Please"],
            ["", "", "Invalid Range Whole Numbers Only Please"],
            ["!", "*", "Invalid Range Whole Numbers Only Please"],
            ["a", "c", "Invalid Range Whole Numbers Only Please"],
            [1, "c", "Invalid Range Whole Numbers Only Please"],
            ["a", 2, "Invalid Range Whole Numbers Only Please"],
            [0, 0, "fizzbuzz"],
            [-3, 3, "lucky -2 -1 fizzbuzz 1 2 lucky"],
            [-3.3, 3.3, "Invalid Range Whole Numbers Only Please"],
            [1, 3, "1 2 lucky"],
            [3, 5, "lucky 4 buzz"],
            [1, 5, "1 2 lucky 4 buzz"],
            [1, 15, "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz"],
            [1, 20, "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz"],
            [90, 93, "fizzbuzz 91 92 lucky"],
            [1, 45, "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz fizz 22 lucky fizz buzz 26 fizz 28 29 lucky lucky lucky lucky lucky lucky lucky lucky lucky lucky buzz 41 fizz lucky 44 fizzbuzz"]
        ];
    }


}