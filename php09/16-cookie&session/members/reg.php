<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 上午10:09
 */
/**
 *
 *
 *
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册新用户</title>
</head>
<body>

    <h1>注册新用户</h1>
       <form action="reg_save.php" method="post">
           <p>用户名：<input type="text" name="username"/></p>
           <p>登陆密码：<input type="password" name="password"/></p>
           <p>确认密码：<input type="password" name="password2"/></p>
           <p>电话号码：<input type="text" name="tel"/></p>
           <p><input type="submit" value="马上注册"/></p>
       </form>
</body>
</html>