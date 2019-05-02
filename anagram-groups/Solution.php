<?php

class Solution
{

    private $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101];
    private $chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];


    /**
     * @param $array
     * @return array
     */
    function getAnagramGroups($array)
    {

        $count = count($array);
        $data = [];
        for ($index = 0; $index < $count; $index++) {
            $origin = $array[$index];
            $origin = str_split($origin);
            $key = $this->getKey($origin);
            if (!isset($data[$key])) {
                $data[$key][] = $array[$index];;
            } else {
                $data[$key][] = $array[$index];
            }
        }
        return array_values($data);
    }

    public function getKey($array)
    {
        $keys = array_combine(array_values($this->chars), array_values($this->primes));
        $sum = 1;
        foreach ($array as $key => $element) {
            $sum = $sum * $keys[$element];
        }
        return $sum;
    }


}

?>


