<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午3:16
 *
 */

$arr1=[11,13,12,1222,477,511];
sort($arr1);//从小到大排序
var_dump($arr1);
echo "<hr/>";
rsort($arr1);//从小到大排序
var_dump($arr1);
echo "<hr/>";
$arr2=[1,125,13,200,-100];
var_dump($arr2);
asort($arr2);//从小到大排序，保留键名
echo "<br/>";
var_dump($arr2);
echo "<hr/>";
$arr3=[1,125,13,200,-100];
var_dump($arr3);
arsort($arr3);//从大到小排序，保留键名
echo "<br/>";
var_dump($arr3);
//按照键名进行排序
