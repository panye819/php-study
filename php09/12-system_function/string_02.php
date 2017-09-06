<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午5:03
 */

$str=<<<XXX
今天是星期六
我们又在上课
好嗨哦！！
XXX;


echo $str;
echo "<hr/>";
echo nl2br($str);//将代码中的换行符或者回车符替换成<br/>标签
echo '<hr/>';
$str2=<<<xxx
<h1>我是标题一</h1>
xxx;
echo $str2;
echo '<br/>';
echo strip_tags($str2);//去掉了html和php标签
echo '<hr/>';
$str3='新闻联播';
echo 'str3 is : '.$str3.'<br/>';
$str4= urlencode($str3);
echo "str4 is :".$str4.'<br/>';
echo "str4 decode is : ".urldecode($str4).'<br/>';
$str5="abcdefg";
echo md5($str5).'<br/>';


