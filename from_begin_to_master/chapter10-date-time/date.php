<?php
/**
 * 全球分为24个时区，每个时区都有自己的本地时间。
 * 在国际无线电通用领域，使用一个统一的时间，称为通用协调时间（Universal Time Coordinated UTC），UTC时间与格林威治标准时间GMT相同
 * 都与英国伦敦的本地时间相同。
 *
 * PHP中默认设置是GMT。
 *
 *
 */

    //获得本地时间戳
    echo "mktime 函数返回的时间戳：".mktime()."<p>";
    echo "当前的日期为：".date("Y-m-d",mktime())."<p>";
    echo "当前的时间为：".date("H:i:s",mktime())."<p>";

    //比较两个时间的大小
    $time1 = date("Y-m-d H:i:s");
    $time2 = "2008-2-3 16:30:00";
    echo "变量\$time1的时间为：".$time1."<BR>";
    echo "变量\$time2的时间为：".$time2."<BR>";

    if (strtotime($time1)- strtotime($time2) < 0){
        echo "\$time1 早于 \$time2";
    }else{
        echo "\$time2 早于 $time1";

    }

    //实现倒计时功能
    $time3 = strtotime(date("Y-m-d H:i:s"));
    $time4 = strtotime("2017-5-19 18:00:00");
    $time5 = strtotime("2018-1-1");
    echo "<BR>";
    echo $time4 - $time3;
    echo "<BR>";
    echo $time5 - $time3;
    echo "<BR>";
    $sub1 = ceil(($time4-$time3)/3600);
    $sub2 = ceil(($time5-$time3)/86400);
    echo "距离本周周末还有<font color='red'> $sub1</font>小时";
    echo "<BR>";
    echo "离2018年元旦还有<font color='red'> $sub2</font>天";