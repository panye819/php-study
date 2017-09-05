<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/5
 * Time: 上午10:22
 */
/**
 * 变量的跨作用域访问
 */

$str="函数体外的全局变量str";
/**
* 借助超全局变量$_GET的跨域能力进行赋值
 *
*/
$_GET['str']=$str;
function show(){
    echo $_GET['str'];
}
show();
echo "<hr/>";
/**
 * $GLOBALS使用全局变量【推荐使用，不用赋值，直接使用】
 * 所有定义的全局变量都会自动在该预定义变量中增加一个数组元素。
 */

function show2(){
    echo $GLOBALS['str'];
}
show2();
echo "<hr/>";

/**
 * global关键字
 *  在函数内使用global关键字将全局变量声明一个副本到局部变量中
 */
$str1="我是函数体外的局部变量str1";
function show3(){
    global $str1;
    echo $str1;
}
show3();