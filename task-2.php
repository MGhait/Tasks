<?php
// Task 2
//################################################################
//=> Build a function that takes an array and an element as its inputs,
// the function searches for that element in the array and checks if it exists.
//If it does, return TRUE. If not, return FALSE
//note: do NOT use the built-in function (in_array)

function is_value_in_array($value, ...$array){
    foreach ($array as $item) {
        if ($item === $value) {
            return true;
        }
    }
    return false;
}
echo is_value_in_array(5,5,2,3,7,9); // 1 = true
echo is_value_in_array("5",5,2,3,7,9); // 0 = false
