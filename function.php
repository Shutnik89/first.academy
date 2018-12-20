<?php
    function getSortedArray (array $array, $startKey = 'yearStart', $endKey = 'yearEnd'){
        $start = array_column($array, $startKey);
        $end = array_column($array, $endKey);
        array_multisort($start, SORT_DESC, $end, SORT_DESC, $array);
        return $array;
    }
?>