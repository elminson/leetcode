<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $string = preg_split ('/[\s]+/', $s);
        return trim(implode(" ",array_reverse($string)));

    }
}

?>
