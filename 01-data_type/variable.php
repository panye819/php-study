<?php
/**
 *  变量：
 *      变量是指在程序执行过程中数值可以变化的量。
 *      变量通过一个名字来标识。
 *      系统为程序中的每一个变量分配一个存储单元，变量名实质上就是计算机内存单元的命名。
 *      因此可以借助变量名即可访问内存中的数据。
 *  变量的声明：
 *      PHP中变量名称用$和标识符表示，变量名是区分大小写的。
 *      变量名不能以数字字符开头
 *      变量名不能以字母和下划线"_"以外的其他字符开头
 *  变量作用域：
 *      1、局部变量：
 *         在函数的内部定义的变量，其作用域是所在函数
 *      2、全局变量：
 *          被定义在所有函数以外的变量，其作用域是整个PHP文件。但在用户自定义函数内部是不可用的。
 *          如果希望在用户自定义函数内部使用全局变量，则要使用global关键字声明全局变量
 *      3、静态变量：
 *          能够在函数调用结束后扔保留变量值，当再次回到其作用域时，又可用继续使用原来的值。
 *          使用静态变量时，要先用static关键字来声明变量，把关键字static放在要定义的变量之前。
 */

    $example = "在。。。。。。。函数外";

    function example(){
        $example = "。。。。。在函数内。。。。。。。。。";
        echo "在函数内输出的内容是： $example.<br>";
    }
    example();
    echo "在函数外输出的内容是： $example.<br>";

//静态变量
//静态变量的初始化只是在函数第一次调用时被执行，以后就不会再对其进行初始化操作了。
    function zdy(){
        static $message = 0;
        $message +=1;
        echo $message." ";
    }
    function zdy1(){
        $message = 0;
        $message +=1;
        echo $message." ";
    }

    for($i=0;$i<10;$i++) zdy();
    echo "<br>";
    for ($i=0;$i<10;$i++) zdy1();
    echo "<br>";

//全局变量
    $zy = "不会看到";
    $zyy = "会看到";

    function lxt(){
//        echo $zy."<br>";
        global $zyy;
        echo $zyy."<br>";
    }
    lxt();
/**
 *  可变变量:
 *      可变变量是一种独特的变量，它允许动态改变一个变量名称。
 *      其工作原理是该变量的名称由另外一个变量的值来确定，实现过程就是在变量的前面再多加一个美元符号"$".
 */
    $change_name = "trans";
    $trans = "You can see me!";
    echo $change_name;
    echo "<br>";
    echo $$change_name;

