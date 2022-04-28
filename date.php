<?php

class D_B_Dates{
    private $date1, $date2;
    const secPerYear = 365*60*60*24;
    const secPerMonth = 30*60*60*24;
    const secPerDay = 60*60*24;

    public function __construct($date1, $date2){
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function calcDiffApprox(){
        $date1_stamp = strtotime($this->date1);
        $date2_stamp = strtotime($this->date2);
        $diff = abs($date2_stamp - $date1_stamp);
        $years = floor($diff / self::secPerYear);
        $mon = floor(($diff - $years * self::secPerYear)/ self::secPerMonth);
        $day = floor(($diff - $years * self::secPerYear - ($mon * self::secPerMonth))/ self::secPerDay);
        print("Diffrence: $years Years and $mon Months and $day Days </br>");
    }
    public function calcDiffAccurate(){
        $diff = date_diff(date_create($this->date1), date_create($this->date2));
        echo $diff->format('Diffrence: %y Years and %m Months and %d Days </br>');
    }
}

$diffrence = new D_B_Dates('1999-04-17', '2022-04-28');
$diffrence->calcDiffApprox();
$diffrence->calcDiffAccurate();
