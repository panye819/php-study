<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/7
 * Time: 上午8:52
 */

/**
 *   cookie:
 *      计算机领域叫做小量信息，是保存在浏览器上的数据
 *      该信息由网络服务器创建并发出，存储在网络浏览器上，从而下次网络浏览器再次访问网络服务器的时候，网络浏览器会主动将该信息发送给
 *      服务器。
 *      Cookie是在http协议下，通过服务器和脚本语言可以维护客户浏览器上信息的一种方式。
 *          在客户浏览器端存储数据并以此来跟踪和识别用户的机制。
 *          是web服务器暂时存储在用户硬盘上的一个文本文件，并随后被web浏览器读取。
 *        功能：
 *              1、记录访客的一些信息。
 *              2、在页面之间传递变量。
 *              3、将所查看的Internet页存储在cookie临时文件夹中，可以提高以后浏览的速度。
 *
 *  基本操作：
 *      设置/修改/获取
 *
 * 注意事项：
 *      cookie是有有效期的，setcookie的第三个参数就是cookie的生命周期，以时间戳形式表示。
 *      cookie的值必须是字符串，如果不是字符串，会强制转换，如果转换失败则会报错。
 *      cookie的值如果要保存数组，可以将cookie名称写成数组元素形式。
 *      cookie在默认情况下是一个临时的cookie，浏览器关闭后就销毁了。
 *      设置了生命周期的cookie是一个持久化cookie，持久化的cookie被保存到浏览器的文件中，浏览器关闭不会消失。
 *         可以通过setcookie的第三个参数来设定值cookie有效的时间点，该参数是一个时间戳，单位为秒。
 *          通常配合time()方法设置，然后在time()返回值上面加减来设置当前的cookie的有效时间点
 *
 *
 *
 *
 *
 */
echo "Hello World!".'<br/>';
//设置cookie
//setcookie('username','devops');

//修改cookie
setcookie('username','AIops',time()+600);

//获取cookie $_COOKIE
var_dump($_COOKIE);




