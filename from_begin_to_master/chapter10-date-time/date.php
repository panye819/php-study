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
