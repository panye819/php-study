<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午3:16
 *
 */
/**
 * 冒泡排序
*/
$arr1=[11,13,12,1222,477,511];
$len=count($arr1);
for ($x=0;$x<$len;$x++){
    for ($y=$len-1;$y>$x;$y--){
        if ($arr1[$y]>$arr1[$x]){
            $temp=$arr1[$y];
            $arr1[$y]=$arr1[$x];
            $arr1[$x]=$temp;

        }
    }
}
var_dump($arr1);
echo "<hr/>";
$arr2=[11,13,12,1222,477,511];
$len_1=count($arr2);
for ($k=1;$k<$len_1;$k++){
    for ($j=0;$j<$len_1-$k;$j++){
        if ($arr2[$j]>$arr2[$j+1]){
            $temp_1=$arr2[$j+1];
            $arr2[$j+1]=$arr2[$j];
            $arr2[$j]=$temp_1;
        }
    }
}
var_dump($arr2);
echo "<hr/>";
$arr3=[11,13,12,1222,477,511];
var_dump($arr3);
$len_2=count($arr3);
for($m=0;$m<$len_2;$m++){
    for ($n=$m+1;$n<$len_2;$n++){
        if ($arr3[$n]<$arr3[$m]){
            $temp_2=$arr3[$m];
            $arr3[$m]=$arr3[$n];
            $arr3[$n]=$temp_2;
        }
    }
}
echo "<br/>";
var_dump($arr3);