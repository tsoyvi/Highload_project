<?php

namespace App\Services;



class BubbleSortService
{
    public function sort(array $array)
    {
        $changes = true;

        while ($changes) {
            $changes = false;
            for ($i = 0; $i < count($array) - 1; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    $changes = true;
                    $temp = $array[$i];
                    $array[$i] = $array[($i + 1)];
                    $array[$i + 1] = $temp;

                    $changes = true;
                }
            }
        }

        return $array;
    }
}
