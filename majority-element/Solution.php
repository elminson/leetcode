<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = count($nums);
        $ntime = $count / 2;
        $sum = array_count_values($nums);
        $result = [];
        foreach ($sum as $key => $value) {
            if ($value > $ntime) {
                $result[] = $key;
            }
        }
        sort($result);
        return $result[0];
    }
}

?>
