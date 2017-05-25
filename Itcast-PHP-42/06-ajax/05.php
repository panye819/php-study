<?php

//服务器端校验用户名
$exists = array('linken','mary','jim');

echo "post:";
print_r($_POST);
echo "get:";
print_r($_GET);
exit;

$name = $_POST['nm'];

//判断用户名是否存在
if(in_array($name,$exists)){
    echo "<span style='color:red'>用户名已经存在，请换一个</span>";
}else{
    echo "<span style='color:green'>恭喜，可以使用此名字</span>";
}
