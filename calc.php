<?php

class Calc{
    private $num1, $num2;

    public function __construct($num1, $num2){
        if($num2>$num1){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }else{
            $this->num1 = $num2;
            $this->num2 = $num1;
        }
    }

    public function add(){
        return $this->num1 + $this->num2; 
    }

    public function sub(){
        return $this->num2 - $this->num1;
    }

    public function multi(){
        return $this->num1 * $this->num2;
    }

    public function div(){
        return $this->num2 / $this->num1;
    }

}

$myCalc = new calc(2, 4);
echo $myCalc->add();
echo $myCalc->sub();
echo $myCalc->multi();
echo $myCalc->div();