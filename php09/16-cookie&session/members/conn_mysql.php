<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 下午2:45
 */
header('Content-Type:text/html;charset=utf-8');
$conn=mysqli_connect('localhost','root','root','itsource');
if (mysqli_connect_errno($conn)){
    echo "连接MySQL失败：".mysqli_connect_error();
}else{
    echo "连接MySQL成功".'<br/>';
}

//mysqli_query($conn,'show tables');
mysqli_query($conn,'set names utf8');