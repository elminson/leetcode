<?php

include "Solution.php";

$input = [3, 2, 3];

$solution = new Solution();

$result = $solution->majorityElement($input);

print_r($result);

$input = [2, 2, 1, 1, 1, 2, 2];

$result = $solution->majorityElement($input);

print_r($result);


public
function insertNode($val, $post)
{
    $newNode = new ListNode($val);
    if ($this->pfirst == null) //empty linked list
    {
        $this->pfirst = $newNode;
        $this->plast = $newNode;
        $this->NumItems++;

    } else {
        if ($post == 1) //add new node to the beginning of th linked list
        {
            $newNode->next = $this->pfirst;
            $this->pfirst = $newNode;
            $this->NumItems++;
        } //add new node to the middle position
        else if ($post > 1 && $post <= $this->NumItems) {
            $ta = $this->pfirst;
            for ($i = 1; $i < $post - 1; $i++) $ta = $ta->next;
            $newNode->next = $ta->next;
            $ta->next = $newNode;
            $this->NumItems++;
        } //append a new node
        else if ($post == ($this->NumItems + 1)) {
            $this->plast->next = $newNode;
            $this->plast = $newNode;
            $this->NumItems++;
        } else {
            echo "Invalid position";

        }
    }

}


function findMedianSortedArrays(&$a, $n,
                                &$b, $m)
{
    global $median, $i, $j;
    $min_index = 0;
    $max_index = $n;

    while ($min_index <= $max_index) {
        $i = intval(($min_index +
                $max_index) / 2);
        $j = intval((($n + $m + 1) /
                2) - $i);

        if ($i < $n && $j > 0 &&
            $b[$j - 1] > $a[$i])
            $min_index = $i + 1;


        else if ($i > 0 && $j < $m &&
            $b[$j] < $a[$i - 1])
            $max_index = $i - 1;


        else {

            if ($i == 0)
                $median = $b[$j - 1];

            else if ($j == 0)
                $median = $a[$i - 1];
            else
                $median = maximum($a[$i - 1],
                    $b[$j - 1]);
            break;
        }
    }


    if (($n + $m) % 2 == 1)
        return $median;

    if ($i == $n)
        return (($median +
                $b[$j]) / 2.0);

    if ($j == $m)
        return (($median +
                $a[$i]) / 2.0);

    return (($median +
            minimum($a[$i],
                $b[$j])) / 2.0);
}


function maximum($a, $b)
{
    return $a > $b ? $a : $b;
}

function minimum($a, $b)
{
    return $a < $b ? $a : $b;
}
