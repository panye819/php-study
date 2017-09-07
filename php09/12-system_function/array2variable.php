<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午3:16
 *
 */
/**
 *  变量与数组相互转换的函数：
 *      extract($arr)
 *          用于将数组中的元素转换成变量导入到当前文件中，键名作为变量名，值作为变量值
 *
 * 数组函数
*/
$arr1=['a'=>11,'b'=>13,'c'=>1222,'d'=>477,'e'=>511];

extract($arr1);
extract($_GET);
echo $a;
echo '<hr/>';
var_dump($_GET);
echo '<hr/>';
echo "id: ".$id;
echo '<hr/>';

//用给的的变量名创建一个数组,变量名是键名，变量值是值
$h=12;
$i=90;
$j=1000;
$arr2=compact('h','i','j','j');
var_dump($arr2);

