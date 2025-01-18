# PHP Pass-by-Reference Gotcha

This example demonstrates a subtle but important aspect of PHP's pass-by-reference mechanism when dealing with arrays.  While pass-by-reference generally modifies the original variable, there are edge cases that can lead to unexpected results if not fully understood.

The `increment_array` function aims to increment each element of an array.  When directly passing the array, it works as expected. However, creating a copy and passing the copy by reference does *not* change the original array.  This is because pass-by-reference is about the variable itself, not its contents.  Creating a copy means you are working with a completely new variable.