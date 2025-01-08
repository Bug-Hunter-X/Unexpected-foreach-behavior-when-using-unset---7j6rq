# PHP Foreach and Unset() Bug
This repository demonstrates a subtle bug in PHP related to the interaction between `foreach` loops and the `unset()` function.  Modifying an array within a `foreach` loop can lead to unexpected behavior if not handled carefully.
The bug occurs when attempting to remove an element from an array using `unset()` while iterating over that array with `foreach`. This can cause the loop to skip elements or behave unpredictably.
The solution demonstrates a safe approach to modifying arrays during iteration.
