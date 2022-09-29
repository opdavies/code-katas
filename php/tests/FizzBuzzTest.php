<?php

// A number is fizz if it is divisible by 3 or if it has a 3 in it
// A number is buzz if it is divisible by 5 or if it has a 5 in it

function FizzBuzz(int $input) {
    $output = '';

    if ($input % 3 === 0 || stripos($input, '3') !== false) {
        $output .= 'Fizz';
    }

    if ($input % 5 === 0 || stripos($input, '5') !== false) {
        $output .= 'Buzz';
    }

    return $output ?: (string) $input;
}

it('should return the input if not divisible by 3 or 5', function ($input, $expected) {
    expect(FizzBuzz($input))->toBe($expected);
})->with([
    [1, '1'],
    [2, '2'],
    [4, '4'],
    [7, '7'],
    [8, '8'],
]);

test('Numbers divisible by or containing 3 should return "Fizz"', function ($input) {
    expect(FizzBuzz($input))->toBe('Fizz');
})->with([3, 6, 9, 13]);

test('Numbers divisible by or containing 5 should return "Buzz"', function ($input) {
    expect(FizzBuzz($input))->toBe('Buzz');
})->with([5, 10, 20, 52]);

test('Numbers divisible by or containing 5 or divisible or containing 3 should return "FizzBuzz"', function ($input) {
    expect(FizzBuzz($input))->toBe('FizzBuzz');
})->with([15, 30, 35, 53]);