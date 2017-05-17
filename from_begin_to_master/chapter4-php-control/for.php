<?php
/**
 *
 *
 */
    //$num = 0;
    for($i=0;$i<=20;$i++){
        echo $i."<BR>";
    }
/**
 *for each
 *  foreach 只能用于遍历数组
 *
 *
 */
    $arr1 = array(1,2,3,4,5);

    foreach ($arr1 as $value){
        echo $value."<BR>";
    }
/**
 *  流程控制的另一种书写格式
 *      在一个复杂的PHP页面中，可能包含了多个条件控制语句、循环语句和函数，查找匹配的大括号会非常麻烦。
 *      可以用冒号(:)来代替左边的大括号，用endif,endwhile,endfor,endforeach和endswitch来代替右边的大括号
 *
 *
 */

    $ss = 2;
    if ($ss>0):
        echo "This number is greater than zero!"."<BR>";
    endif;

    for ($x=0;$x<10;$x++):
        echo $x."<BR>";
    endfor;