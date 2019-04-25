<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function majorityElement($nums)
    {
        $count = count($nums);
        $ntime = $count / 3;
        $sum = array_count_values($nums);
        $result = [];
        foreach ($sum as $key => $value) {
            if ($value > $ntime) {
                $result[] = $key;
            }
        }
        return $result;
    }
}

?>
