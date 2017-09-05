<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/5
 * Time: 上午9:23
 * */
 /**
 * 引用传值：
 *  默认情况下，函数的参数是传值赋值。
 *  引用赋值的语法：
 *      function 函数名(&形式参数1，&形式参数2){
 * }
 *  注意：
 *      使用了引用赋值以后，传进函数的数据不是数据，而是内存地址，在函数内部和外部都可以对该内存地址的数据进行改变。
 */

$str="今天星期三";

function show(&$str){
    $str="明天我们不上课";
    return $str;
}

echo show($str);
echo '<hr/>';

echo $str;
echo '<hr/>';
/**
 * 可变函数
 *  可变函数是指函数可以通过一个变量名字来调用
 *
 */

function display(){
    echo "这是可变函数";
}
$b='display';
$b();
echo '<hr/>';
/**
 * 匿名函数
 *  将函数的定义作为变量的值，直接赋值给变量，调用时直接使用变量进行调用
 */
$a=function (){
    echo "我是匿名函数！！！";
};
$a();