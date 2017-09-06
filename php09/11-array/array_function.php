<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午2:07
 */
/**
 * 常用的数组函数：
 *  1、array_values($arr)
 *      获取数组的值，主要针对数组的键名进行格式化
 *  2、arr_keys($arr)
 *      获取数组的键名
 *  3、arr_flip($arr)
 *      数组中的值与键名互换
 *
 *
*/

$arr1=['a'=>1,'c'=>2,'d'=>3,4,5];

echo var_dump(array_values($arr1)).'<br/>';
echo var_dump(array_keys($arr1)).'<br/>';
echo var_dump(array_flip($arr1)).'<br/>';

