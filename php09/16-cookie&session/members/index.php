<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 下午5:08
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员系统首页</title>
</head>
<body>

<h1>会员系统首页</h1>

<?php
    session_start();
    if (isset($_SESSION['userid'])){
//        echo $_SESSION['username'].', 欢迎回来！！<a href="#">注销</a>';
        echo $_SESSION['username'].', 欢迎回来！！<a href="./logout.php">注销</a>';
    }else{
     ?>
        <nav>
             <a href="reg.php">注册</a>
             <a href="login.php">登陆</a>
        </nav>
    <?php
    }
?>
</body>
</html>
