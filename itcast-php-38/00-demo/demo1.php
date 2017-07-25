<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/7/25
 * Time: 下午2:09
 */

//    $one = 200;
//    $two = 100;
//    function demo(){
//        global $one,$two;
//
//        echo "运算结果：".($one+$two)."<br>";
//
//    }
//    demo();

//function test(){
//    static $a = 0;
//    echo $a."<br>";
//    $a++;
//}
//test();
//test();
//test();
//
function test2($i,$j){
    $sum = 0;
    $sum = $i*$i+$j*$j;
    return $sum;
}
echo "The result is :".test2(3,9);