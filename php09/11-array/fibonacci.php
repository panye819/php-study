<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 上午9:41
 */

/**
 * 斐波那契数列
 * 0，1，1，2，3，5，8，13，21，34，55，89，144，......
 * 这个数列从第二项开始，每一项等于前两项之和，前两项必须已知
 *
 *
*/
$a=0;
$b=1;

function fib($n){
    if ($n==0){
        return 0;
    }
    if ($n==1){
        return 1;
    }

    return fib($n-1)+fib($n-2);

}

echo fib(2);
