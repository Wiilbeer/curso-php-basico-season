<?php

$array = array(1,2,3,4,5);

/*
 * in_array
 */
//var_dump(in_array(3, $array));

/*
 * array_key_exist
 */
//var_dump(array_key_exists(0, $array));

/*
 * unset
 */
echo '<pre>';
print_r($array);
echo '</pre>';

unset($array[4]);

echo '<pre>';
print_r($array);
echo '</pre>';

/*
 * array_merge
 */
$array = array_merge($array, array(5,6,7,8));
echo '<pre>';
print_r($array);
echo '</pre>';

var_dump($array);
exit();