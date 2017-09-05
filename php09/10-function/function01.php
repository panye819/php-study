<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/5
 * Time: 上午8:54
 *
 * 函数参数的加强：
 *  一般情况下：
 *      1）实际参数与形式参数数量是一一对应的
 *      2）实际参数与形式参数类型也是一一对应的
 *  特殊情况下：
 *      1、实际参数比形式参数比较多
 *          不会报错，多余的直接忽略不计
 *      2、形式参数比较多
 *          会报错
 *      3、设置参数的默认值
 *
 */
function plus3($a,$b,$c=100){
    $d = $a + $b + $c;
    echo $a." + ".$b." + ".$c." = ".$d;
}

//$result =
//echo $a." + ".$b." = ".plus3(11,12);
//plus3(11,12,300 );
/**
 *
 * 参数个数不固定的时候可以使用下面的方法获取函数的所有实际参数，以数组形式返回！只能在函数体内部使用
 *
 * */
function add(){
    $arr=func_get_args();
//    var_dump($arr);
    $result=0;
    for ($i=0;$i<count($arr);$i++){
        $result+=$arr[$i];
    }
    return $result;
}

echo add(1,2,3,4,5,6,7,8,9,10);