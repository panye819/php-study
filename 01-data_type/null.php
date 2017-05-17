<?php
/**
 * 特殊数据类型包括资源和空值两种
 *  资源
 *  空值（null）：
 *      表示没有为变量设置任何值。另外空值不区分大小写，null和NULL效果是一样的。
 *      被赋予空值的情况有一下三种：
 *          1、还没有被赋值
 *          2、被赋予空值
 *          3、被unset()函数处理过的变量
 */

    echo "<p>变量(\$string1)直接赋值为null:";
    $string1 = null;
    $string3 = "str";
    if(is_null($string1))
        echo "<p>string1 = null";
    echo "<p>变量(\$string2)未被赋值： ";
    if(is_null($string2))
        echo "string2 = null";
    echo "<p>被unset()函数处理过的变量(\$string3): ";
    unset($string3);
    if(is_null($string3))
        echo "string3 = null";

