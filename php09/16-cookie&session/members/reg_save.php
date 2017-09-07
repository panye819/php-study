<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 下午2:11
 */

include ('./conn_mysql.php');

//第一步：接收数据

$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$tel=$_POST['tel'];

//第二步：验证数据有效性

if (mb_strlen($username,'utf-8')<2){
    echo "用户名不可以少于2个字";
    exit(111);
}
if (strlen($password) <6){
    echo "密码不能少于6位";
    exit(112);
}
if (!$password===$password2){
    echo "两次输入的密码不相同";
    exit(113);
}
$password=md5($password);
//第三步：构造SQL语句，实现注册用户功能（向member表中插入一条数据）
$sql="insert into member(username,password,tel) VALUES ('$username','$password','$tel')";
$r=mysqli_query($conn,$sql);
if ($r){
    echo '恭喜你，入坑啦！<a  href="./index.php">回到首页</a>';
}else{
    echo "注册失败，再来一次！！";
}


//第四步：结果处理