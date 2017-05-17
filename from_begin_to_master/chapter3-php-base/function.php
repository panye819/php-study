<?php
/**
 *  函数：
 *      函数就是将一些重复使用到的功能写在一个独立的代码块中，在需要的时候单独调用。
 *      创建函数的基本语法格式为：
 *          function fun_name($str1,$str2...$strn){
 *              fun_body
 *          }
 *  在调用函数时，需要向函数传递参数，被传入的参数称为实参，而函数定义时的参数称为形参。
 *  函数建参数传递的方式有：
 *      1、按值传递
 *          将实参的值赋值到对应的形参中，在函数内部的操作针对形参进行，操作的结果不会影响到实参，即函数返回后，实参的值不会改变。
 *      2、按引用传递
 *          将实参的内存地址传递给形参。这时，在函数内部所有对形参的操作都会影响到实参的值。
 *          函数返回后，实参的值会发生变化。
 *          引用传递的方式就是函数定义时，在形参前面加“&”符号即可。
 *      3、默认参数
 *          可以指定某个参数为可选参数，将可选参数放在参数列表末尾，并且指定其默认值为空。
 *          当使用默认参数时，默认参数必须放在非默认参数的右侧，否则函数可能出错。
 *
 */

//值传递
    function example($num)
    {
        $num = $num*$num;
        echo "在函数内，\$num = ".$num;
    }
    example(4);
    $num = 1;
    echo "<p>在函数外 \$num = $num<p>";

//引用传递

    function example1(&$m)
    {
        $m = $m*5+10;
        echo "在函数内\$m = ".$m;
    }
    $m =1;
    example1($m);
    echo "<p>在函数外：\$m = $m<p>";

//默认参数（可选参数）

    function values($price,$tax="0.2")
    {
        $price = $price + $price*$tax;
        echo "价格是： ".$price.'<BR>';
    }
    values(100,0.25);
    values(100);
    values(200,0.5);
    echo "<BR>";
//变量函数
    function come(){
        echo "来了<p>";
    }
    function go($name="jack")
    {
        echo "$name 走了<p>";
    }
    function back($string){
        echo "又回来了，$string<p>";
    }

    $func = "come";
    $func();
    $func = "go";
    $func("Tom");
    $func = "back";
    $func("Lily");
//函数引用
//与
    function &ex2($tmp=0)
    {
        return $tmp;
    }
    $str = &ex2("看到了");
    echo $str."<p>";