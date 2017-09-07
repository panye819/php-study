<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 上午8:52
 */

/**
 *  session:
 *      session是保存在服务器上的数据，属于服务器上的技术，该技术是基于cookie技术实现的。
 *      在服务器端，需要为每次来访的浏览器创建一个独立的数据空间，并且为每块内存空间分配一个唯一的标识（PHPSESSIONID）。
 *      该标识再通过cookie的形式发送给浏览器让浏览器保存，该浏览器再次发送请求时附带这个cookie的值（PHPSESSIONID）发送
 *      给服务器，服务器就会根据这个标识找到独立的数据空间。
 *
 *      session一般叫做会话机制，是浏览器与服务器之间不断请求响应的一个对话关系，对于客户的请求，服务器都可以正确识别出
 *      来自于同一个用户。
 *
 *      在哪些场景使用session
 *          1、在服务器上记录登录网站信息
 *          2、购物车之类的处理。用户可能会在一段时间内在同一个网站的不同页面中选择不同的商品，这些信息都会保存到session中，
 *              以便在最后付款时提取信息。
 *          3、记录在一个用户对网站访问过程中的数据，保存在session中的数据可以在任何请求中使用。
 *      使用session之前要先开启session支持
 *          session_start()
 */
session_start();
var_dump($_SESSION);
echo '<br/>';
/**
 * session的基本操作
 *  1、新增session
*/
$_SESSION['username']='DevOps';
echo $_SESSION['username'].'<br/>';
//修改session
$_SESSION['username']='AIOps';

//删除session
$_SESSION=[];//删除所有session
echo '----------<br/>';
var_dump($_SESSION);

/**
 *  unset unset($_SESSION['变量名'])，这种方法只会删除内存中的数据，没有删除文件系统中的session文件
 *  如果要彻底删除文件系统中的session的数据文件，可以使用session_destroy()函数。
 */

/**
 *  session与cookie都能实现跟踪用户，获取请求之间的联系数据
 *      cookie：在客户端存在，安全性较低，
 *          优点：
 *              不占据服务器资源，数据保存在客户端
 *          缺点：
 *              数据不安全，不可靠
 *
 *      session：将数据存储在浏览器上
 *          优点：
 *              数据很安全
 *          缺点：
 *              占据服务器资源
 *  如何选择cookie和session：
 *      如果数据安全性要求高，数据量比较小，比如用户登录数据，则选择session
 *      如果数据安全性要求不高，数据量较大，可以选择cookie，如记录用户的浏览行为相关数据
 *
*/



