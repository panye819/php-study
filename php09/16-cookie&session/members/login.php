<?php
/**
 * 登陆表单，收集用户的登陆数据
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登陆</title>
</head>
<body>

<h1>用户登录</h1>
<form action="login_check.php" method="post">
    <p>用户名：<input type="text" name="username"/></p>
    <p>登陆密码：<input type="password" name="password"/></p>
    <p><input type="submit" value="登陆"/></p>
</form>
</body>
</html>