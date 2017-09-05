<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/5
 * Time: 上午10:38
 */


/**
 *  递归与数组
 *  递归：
 *      在函数体内部调用函数自己
 *
 */

function show($n){
    echo $n.'<br/>';
    if ($n<3){
        show($n+1);
    }
    echo $n.'<br/>';
}

show(1);
