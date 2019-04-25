<?php

include "Solution.php";


$solution = new Solution();

$string = "a, yqo! qjktum ym. .fumuhau";
$result = $solution->reverseWords($string);
print_r($result);

$string = "the sky is blue";
$result = $solution->reverseWords($string);
print_r($result);

$string = "a good   example";
$result = $solution->reverseWords($string);
print_r($result);


