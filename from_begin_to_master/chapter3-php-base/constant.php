<?php
/**
 * 常量可以理解为值不变的量。
 * 常量的值被定以后，在脚本的其他任何地方都不能改变。
 * 一个常量由英文字母、下划线和数字组成。但数字不能作为首字母出现。
 *
 * 在PHP中用define()函数来定义常量,语法格式为：
 * define（string constant_name,mixed value,case_sensitive=true）;
 *
 *  获取常量的值有两种方法：
 *      1、直接使用常量名获取值
 *      2、使用constant()函数
 *          constant()函数可以动态地输出不同的常量，在使用方法上更灵活方便。
 *          mixed constant(string const_name);
 *          const_name为要获取常量的名称，也可以为存储常量名的变量。
 *  要判断一个常量是否已经被定义，可以使用defined()函数
 *      bool defined(string constant_name);
 */
    define("MESSAGE","能看见一次");
    echo MESSAGE."<BR>";
    //echo message."<BR>";
    define("COUNT","能看见多次",true);
    echo COUNT."<BR>";
    echo Count."<BR>";
    $name = "count";
    echo constant($name)."<BR>";
    echo (defined("MESSAGE"))."<BR>";

