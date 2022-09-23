let FizzBuzz = require("./FizzBuzz");

it.each([
  [1, "1"],
  [2, "2"],
  [4, "4"],
  [7, "7"],
  [8, "8"],
])("should return %s as '%s'", (input: number, expected: string) => {
  expect(FizzBuzz(input)).toBe(expected);
});

it.each([3, 6, 9])("should return %s as 'Fizz'", (input: number) => {
  expect(FizzBuzz(input)).toBe("Fizz");
});

it.each([5, 10, 20])("should return %s as 'Buzz'", (input: number) => {
  expect(FizzBuzz(input)).toBe("Buzz");
});

it.each([15, 30, 45])("should return %s as 'FizzBuzz'", (input: number) => {
  expect(FizzBuzz(input)).toBe("FizzBuzz");
});
