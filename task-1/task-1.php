<?php
// task one
// ###############################################################
//  Build a function that takes an array that has duplicate elements,
// returns an array of unique elements.
//note: do NOT use the built-in function (array_unique)

function u_array(...$elements){
    $newArray = array();
    foreach ($elements as $element) {
        if (!in_array($element,$newArray)) {
            $newArray[] = $element;
        }
    }
    return($newArray);
}
$res = u_array(1,2,3,2,5,2,4,3,6,2,1,7); // 1,2,3,4,5,6,7
echo '<pre>';
print_r($res);
echo '</pre>';