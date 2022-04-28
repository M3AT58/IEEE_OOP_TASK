<?php


$num = [11, -2, 4, 35, 0, 8, -9];

class Array_Sort{
    private $sorted;

    public function aSort(array $notSortedArray){
        $this->sorted = $notSortedArray;
        sort($this->sorted);
        return($this->sorted);
    }

    public function dSort(array $notSortedArray){
        $this->sorted = $notSortedArray;
        rsort($this->sorted);
        return($this->sorted);
    } 
}


$arraySort = new Array_Sort();
echo "<pre>";
print_r($num);
print_r($arraySort->aSort($num));
print_r($arraySort->dSort($num));