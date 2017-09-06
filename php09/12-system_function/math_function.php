<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午3:06
 *
 *
 * 数学函数：
 *      float ceil(float $value) 进一法取整
 *      float floor(float $value) 舍去法取整
 *      int rand(int $min,int $max)产生一个随机数
 */

$num=5.6;
echo ceil($num).'<br/>';
echo floor($num).'<br/>';

echo rand().'<br/>';
echo rand(1,10).'<br/>';
echo rand(1,100).'<br/>';

