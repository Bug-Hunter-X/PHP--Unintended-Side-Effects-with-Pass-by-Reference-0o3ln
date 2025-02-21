# PHP Reference Issues: Unexpected Behavior from Pass-by-Reference

This repository demonstrates a common error in PHP related to unexpected behavior resulting from the use of pass-by-reference. The `bug.php` file shows a function that modifies a variable passed by reference, and a second example which does not. The `bugSolution.php` shows how to properly handle references to avoid unexpected modifications to the original data.

## How to Reproduce the Bug

1. Clone this repository.
2. Run `bug.php`.
3. Observe the output and note that the original variable is changed when passed by reference, while it is unchanged when passed by value.