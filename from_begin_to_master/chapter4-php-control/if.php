<?php
/**
 *
 *
 */
    $age = 810;

    if ($age >18){
        echo "你已经成年了！";
    }else{
        echo "你还是未成年人！";
    }


    if ($age>=80 and $age<=100){
        echo "你的成绩很好";
    }elseif ($age>=60 and $age<80){
        echo "你的成绩还不错";
    }elseif ($age>100 or $age<0){
        echo "你的分数不正常，请核实！";
    }else{
        echo "你的成绩不及格";
    }
