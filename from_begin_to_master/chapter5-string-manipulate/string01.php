<?php
/**
 *  字符串是指由零个或多个字符构成的一个集合，字符主要包含以下几种类型：
 *      1、数字类型
 *      2、字母类型
 *      3、特殊字符
 *      4、不可见字符，如\n,\r,\t等
 *
 *  单引号与双引号的区别：
 *      任何变量在双引号种都会被转换成它的值进行输出，而单引号会按其原样进行输出。
 *      在进行SQL查询之前，所有字符串都必须加单引号，以避免可能的注入漏洞和SQL错误。
 *  字符串连接符"."
 *      半角符号"."是字符串连接符，可以把两个或者两个以上的字符串连接成一个新字符串。
 *      应用字符串连接符号无法实现打了字符串的连接，PHP允许程序员在双引号中直接包含字符串变量
 */

    $name = "Tom";
    $age = 18;
    $sex = "male";

    echo "$name$age$sex";
    //去除字符串首尾空格和特殊字符
        $str1 = "  @首尾都有空格@    ";
        $str2 = "  @头部有空格@";
        $str3 = "@尾部有空格@    ";
//        $str1 = "  首尾都有空格    ";
        echo $str1;
        echo "<Br>";
        echo trim($str1);
        echo "<BR>";
        //去除字符串左边的空格
        echo ltrim($str1);
        echo "<BR>";
        //去除字符串左边的特殊字符
        echo ltrim($str1," @");
        echo "<BR>";
        //去除字符串右边的空格
        echo rtrim($str1);
        echo "<BR>";
        //去除字符串右边的特殊字符
        echo rtrim($str1,"@ ");
        echo "<BR>";
        echo $str2;
        echo "<Br>";
        echo trim($str2);
        echo "<BR>";
        echo $str3;
        echo "<Br>";
        echo trim($str3);
        echo "<BR>";