<?php
/**
 *  转义字符:\
 *  自动转义、还原字符串数据
 *      addslashes()函数
 *          用来为字符串str加入反斜线"\"
 *      stripslashes()函数
 *          用来将使用addslashes()函数转移之后的字符串str返回原样
 *
 */

    $str = "select * from tb_book where bookname = 'php 从入门到精通'";
    echo $str."<BR>";
    $a = addslashes($str);
    echo $a."<BR>";
    $b = stripslashes($a);
    echo $b."<BR>";
    //所有数据在插入数据库之前，有必要应用addslashes()函数进行字符串转义，以免特殊字符未经转义而在插入数据库时出现错误。
    //另外，对于使用addslashes()函数实现的自动转义字符串可以使用stripslashes()函数进行还原，但数据在插入数据库之前必须再次转义。

/**
 * addcslashes()函数：
 *  实现转义字符串中的字符，即在制定的字符charlist前加上反斜线"\".
 *
 * stripcslashes()函数：
 *  将addcslashes()函数转义过的字符串str还原。
 *
 *
 */
    $str2 = "编程体验网";
    echo $str2."<BR>";
    $str3 = addcslashes($str2,"编程体验网");
    echo $str3."<BR>";
    $str4 = stripcslashes($str3);
    echo $str4."<BR>";

    //获取字符串长度
    //汉字占三个字符，数字、英文、小数点、下划线和空格占一个字符。
    $str5 = "编程体验网：www.bcty365.com";
    echo "\$str5的长度是： ".strlen($str5)."<BR>";
    $str6 = "编程体验网:www.bcty365.com";
    echo "\$str6的长度是： ".strlen($str5)."<BR>";
    echo strlen("：www.bcty365.com");
    echo "<BR>";
    echo strlen("编程体验网");
    echo "<BR>";

    //判断字符长度是否符合要求
    //$username = "Tom";
    $username = "HelloKitty";
    if (strlen($username) <6){
        echo "Username is too short!! At least 6 characters !!";

    }else{
        echo "Welcome ".$username;
    }
    echo "-----------------------------------------<BR>";
/*    截取字符串
    substr()函数来截取字符串x
    substr()截取中文字符串时，如果截取的字符串个数是奇数，那么就会导致截取的中文字符串出现乱码。所以该函数适合截取英文字符。
    如果想要截取中文字符，而且要避免出现乱码，最好的方法是应用substr()编写一个自定义函数。
*/
    $str22 = "She is a well-read girl";
    echo substr($str22,0)."<BR>";
    echo substr($str22,4,14)."<BR>";
    echo substr($str22,-4,4)."<BR>";
    echo substr($str22,0,4)."<BR>";
    //字符截取显示
    $text_1 = "愿您一帆风顺、二龙腾飞、三羊开泰、四季平安、五福临门、六六大顺、
    七星高照、八面威风、九九归一、十全十美、百事亨通、千事顺心、万事如意！！";
    if (strlen($text_1)>30){
        echo substr($text_1,0,30)."......"."<BR>";
        echo substr($text_1,0,29)."......"."<BR>";//会出现乱码
    }else{
        echo $text_1."<BR>";
    }

    /*
     *
     * 比较字符串
     * 在PHP中，对字符串进行比较主要有三种方法：
     *      1、strcmp()函数与strcasecmp()函数
     *          二者的而区别在于前者是区分字符的大小写的，而后者是不区分字符大小写的。
     *      2、strnatcmp()函数
     *          按自然排序法进行字符串的比较
     *      3、strncmp()函数
     *          用来比较特定长度的字符串
     */
     $str33 = "MicroSoft";
     $str34 = "microsoft";
     echo strcmp($str33,$str34)."<BR>";
     echo strcasecmp($str33,$str34)."<BR>";

     $str44 = "mrsoft1";
     $str45 = "MRSOFT2";
     echo strcmp($str44,$str45)."<Br>";
     echo strnatcmp($str44,$str45)."<BR>";

     $str55 = "I like PHP!";
     $str56 = "i am fine!";
     echo strncmp($str55,$str56,2)."<BR>";

     //使用substr_count()函数检索子串出现的次数
     echo substr_count($str55,"f")."<Br>";
     echo substr_count($str55,"P")."<Br>";

     //替换字符串
     //该函数在执行替换操作时，不区分大小写。如果需要区分大小写，可以使用str_replace()函数。
     echo str_ireplace("PHP","JAVA",$str55)."<BR>";

     //查找关键字描红
     $str66 = "在职硕士按申硕的种类分为单独考试、同等学力申硕和在职攻读硕士。";
//     $str67 = "在职硕士";
     $str67 = "硕士";

     echo str_ireplace($str67,"<font color='#FF0000'>".$str67."</font>",$str66)."<BR>";

     //格式化字符串
     //number_format()函数
     $num_1 = 1868.96907907907;
     echo number_format($num_1)."<BR>";
     echo number_format($num_1,2)."<BR>";
     echo number_format($num_1,2,'.','.')."<BR>";

     //分割字符串
    //explode()函数按照指定的规则对一个字符串进行分割，返回值为数组。
    $str_1 = "PHP权威指南@JAVA权威指南@Python权威指南@Ruby权威指南";
    $str_arr = explode('@',$str_1);
    print_r($str_arr);
    echo "<BR>";
    echo $str_arr[0]."<BR>";
    echo $str_arr[1]."<BR>";
    echo $str_arr[2]."<BR>";
    echo $str_arr[3]."<BR>";

    //合成字符串
    //implode()函数可以将数组的内容组合成一个新的字符串。
    $str_arr_2 = implode("*",$str_arr);
    echo $str_arr_2;



