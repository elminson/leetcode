<?php

class Solution
{

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
            sort($origin);
            $origin = implode('', $origin);
            if (!isset($data[$origin])) {
                $data[$origin][] = $origin;
                print "not set =>" . $origin . " \n";
            } else {
                $data[$origin][] = $array[$index];
            }
        }

        return array_values($data);
    }


}

?>
