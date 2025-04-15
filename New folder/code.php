<?php

function shortAnArray($array) {
    $shortenedArray = array_map(function($item) {
        return mb_substr($item, 0, 3); // Shorten each item to the first 3 characters
    }, $array);
    return $shortenedArray;
}

function shortAnArrayWithKeys($array) {
    $shortenedArray = array_map(function($item) {
        return mb_substr($item, 0, 3); // Shorten each item to the first 3 characters
    }, $array);
    return array_combine(array_keys($array), $shortenedArray); // Keep the original keys
}

// Example usage:
$array = ['apple', 'banana', 'cherry'];
$shortenedArray = shortAnArray($array);
$shortenedArrayWithKeys = shortAnArrayWithKeys($array);

print_r($shortenedArray);
print_r($shortenedArrayWithKeys);

?>