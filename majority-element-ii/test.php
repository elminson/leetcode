<?php

include "Solution.php";

$input = [3, 2, 3];

$solution = new Solution();

$result = $solution->majorityElement($input);

print_r($result);

$input = [1, 1, 1, 3, 3, 2, 2, 2];

$result = $solution->majorityElement($input);

print_r($result);
