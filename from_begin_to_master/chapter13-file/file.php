<?php
/**
 * 文件是用来存储数据的方式之。
 *  文件处理包括读取、关闭、重写等。
 *
 *
 */

    //打开、关闭文件
    $f_open = fopen("test.txt","wb") or die("文件不存在");
    $str = "遥望兄弟登高处，遍插茱萸少一人";
    fwrite($f_open,$str);
    fclose($f_open);
    readfile("test.txt");
