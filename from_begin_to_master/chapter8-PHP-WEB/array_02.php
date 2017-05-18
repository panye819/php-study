<?php
/**
 *
 *
 */
        //一维数组
        $array = array("asp","php","java");
        print_r($array);
        echo "<BR>";
        //统计数组元素个数
        echo count($array);
        //查询数组中指定元素
//        echo array_search();
        //获取数组中最后一个元素
        echo "数组最后一个元素是： ".array_pop($array);
        echo "<BR>";
        //向数组中添加元素
        array_push($array,"ruby","python");
        print_r($array);
        echo "<BR><BR>";
        //删除数组中重复的元素
        $array_2 = array(1,2,2,3,3,4,4,4,4,5);
        print_r($array_2);
        echo "<BR><BR>";
        $array_2_unique = array_unique($array_2);
        print_r($array_2_unique);


        


