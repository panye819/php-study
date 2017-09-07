<?php
/**
 * 验证用户的登陆信息，验证是否允许登陆
 *
 */
include ('./conn_mysql.php');
//第一步：接收数据
$username=$_POST['username'];
$password=md5($_POST['password']);

//验证数据有效性

//第三步：构造SQL语句，去数据库验证用户的名字和密码是否正确
$sql="select * from member WHERE username='$username' AND password='$password'";
$rs=mysqli_query($conn,$sql);

//第四步：结果处理
if (mysqli_num_rows($rs)>0){
    //获取到用户名和ID值
    $row=mysqli_fetch_assoc($rs);
    session_start();
    $_SESSION['username']=$row['username'];
    $_SESSION['userid']=$row['id'];
    $_SESSION['tel']=$row['tel'];
//    echo '尊敬的'.$_SESSION['username'].'用户，欢迎你！<a href="./index.php">回到首页！</a>';
    echo '尊敬的用户，欢迎你！<a href="./index.php">回到首页！</a>';
//    var_dump($_SESSION);

}else{
    echo "请确认用户名和密码后，重新尝试！！";
}