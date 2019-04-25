<?php

include "Solution.php";

$input = [3, 2, 3];

$solution = new Solution();

$result = $solution->majorityElement($input);

print_r($result);

$input = [2, 2, 1, 1, 1, 2, 2];

$result = $solution->majorityElement($input);

print_r($result);
