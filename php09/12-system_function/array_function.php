<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午3:16
 *
 */
/**
 *
 *
 * 数组函数
*/
$arr1=[11,13,12,1222,12,13,477,511];
$arr2=[1,3,2,6,4,11,10];

print_r(array_unique($arr1));
echo "<hr/>";

print_r(array_reverse($arr1),false);
echo "<hr/>";
print_r(array_rand($arr1,2));//得到的是键名不是值
echo "<hr/>";
shuffle($arr1);//打乱数组，会影响原数组
print_r($arr1);
echo "<hr/>";
print_r(array_merge($arr1,$arr2,['a','b','c']));//合并产生一个数组，不会对原数组造成影响
echo "<hr/>";
//字符串与数组的转换
//将字符串按照指定的分隔符进行分割，产生数组
$str='I am a man!';
$arr3=explode('a',$str);

var_dump($arr3);
echo "<hr/>";
//数组拼接成字符串
$arr4=['I','am','a','string!'];
$str1=implode(' ',$arr4);
echo $str1;

