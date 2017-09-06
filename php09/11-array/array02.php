<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 上午11:26
 */

/**
 * 数组：
 *          数组就是一组数据的组合，把一系列数据组织起来，形成一个可以操作的整体。
 *          其中每个变量被称为一个元素，每个元素由一个特殊的标识符来区分，这个标识符称为键（也成为下标）。
 *          数组中每个元素都包含两项，键和值。
 *      声明数组：
 *          1、array array([mixed ...])
 *          2、直接为数组元素赋值的方式声明数组。
 *
 *      数组的类型：
 *          1、数字索引数组
 *              数字索引一般表示数组元素在数组中的位置，它由数字组成，下标从0开始。
 *          2、关联数组
 *              关联数组的键名可以是数字和字符串混合的形式，在一个数组中，只要键名中有一个不是数字，那么这个数组就是关联数组。
 *      输出数组：
 *          使用print_r()函数可以将数组结构进行输出。
 *
 *      一维数组：
 *           当一个数组的元素是变量时，这个数组就是一维数组。
 *           一维数组是最普通的数组，它只保存一列内容。
 *      二维数组：
 *           一个数组的元素的如果是一维数组，那么这个数组就是二维数组。
 *
 *      遍历数组：
 *           1、用foreach结构遍历数组
 *           2、使用list()函数遍历数组
 *
*/
//for循环遍历数组
$arr1=array(1,2,3,4,5,6);

for ($i=0;$i<count($arr1);$i++){
    echo $arr1[$i].' ';
}
echo "<hr/>";
//var_dump遍历数组
$name=array('刘备',['关羽',18,'男',['中国','武将','三国','蜀国']],'张飞','诸葛亮','法正');
var_dump($name);
echo "<hr/>";

//用foreach结构遍历数组，是对原数组的拷贝，对数组进行改变不会影响到原数组
$arr2=array(1,2,3,4,5);
foreach ($arr2 as $arr2_items ){
    if ($arr2_items ==2)
        continue;
    echo $arr2_items.'  ';
}
echo "<hr/>";
//用print_r遍历数组
$array_2 = array(
    "book"=>array("it","php","java"),
    "sport"=>array("basektball","football","swimming"),
    "fruit"=>array("apple","orange","pear")
);

print_r($array_2);
