<?php
/**
 *
 *
 */
    $num = 0;

    while ($num <100){
        $num = $num +10;
        echo $num."<BR>";
    }

    $num1 = 1;
    while ($num1 != 1){
        echo "不会看到！";
    }do{
        echo "会看到";
    }while ($num1 != 1);
