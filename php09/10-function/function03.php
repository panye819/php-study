<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/5
 * Time: 上午9:43
 */

/**
 * 函数练习：
 *  编写一个函数，实现返回从1加到任意数的结果
 *
 *
 * 函数定义的三部曲：
 *  1、确定函数的名称：
 *      会根据函数需要实现的功能，提取出关键词，将关键词翻译成英文作为函数的名称
 *      函数名一定要做到：见名知意
 *
 *  2、确定函数的参数：
 *
 *  3、确定函数的返回值
*/

function add($n){
    $result=0;
    for ($i=0;$i<=$n;$i++){
        $result+=$i;
    }
    return $result;
}

echo add(10);