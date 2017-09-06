<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/9/6
 * Time: 下午2:18
 */
/**
 *
 *
 *
*/
//echo date_timezone_get();

echo date('Y-m-d H:i:s').'<br/>';
echo time().'<br/>';
//输出一个10天以后的时间
echo date('Y年m月d日 H:i:s',(time()+10*24*3600)).'<br/>';

echo date('Y-m-d',time()).'<br/>';

echo date('m-d',time()).'<br/>';

echo date('Y-m-d H:i:s',time()).'<br/>';

echo date('Y-m-d H:i:s',strtotime('2017-04-15 17:16:18')).'<br/>';

echo date('Y-m-d',strtotime('2017-04-15 17:16:18')).'<br/>';