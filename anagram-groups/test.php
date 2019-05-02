<?php

include "Solution.php";


$array = ["eat", "tea", "tan", "ate", "nat", "bat"];

$solution = new Solution();

$result = $solution->getAnagramGroups($array);

print_r(json_encode($result));

