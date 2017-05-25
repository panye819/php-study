<?php
/**
 * Created by PhpStorm.
 * User: hx-tech-08
 * Date: 2017/5/25
 * Time: 上午10:21
 */
    //服务器端校验用户名
    $exists = array('linken','mary','jim');
    $name = $_GET['nm'];

    //判断用户名是否存在
    if (in_array($name,$exists)){
        echo "<span style='color:red'>用户名已存在，请更换其他用户名！！</span>";
    }else{
        echo "<span style='color: chartreuse'>恭喜！这个用户名尚未注册!!</span>";

    }