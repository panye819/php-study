<?php
/**
 * Created by PhpStorm.
 * User: castlepan
 * Date: 2017/7/25
 * Time: 下午2:09
 */
class Person{
    var $name;
    var $gender;
    var $age;

    function say(){
        echo "我的名字：".$this->name.", 性别：".$this->gender.", 年龄： ".$this->age.". <br>";
    }
    function walk(){
        echo $this->name."在走路<br>";
    }
}

$person1 = new Person();
$person2 = new Person();
$person3 = new Person();

$person1->name = "Henry";
$person1->gender = "male";
$person1->age = "30";

echo "person1对象的名字是： ".$person1->name."<br>";
echo "person1对象的性别是： ".$person1->gender."<br>";
echo "person1对象的年龄是： ".$person1->age."<br>";
$person1->say();
$person1->walk();
echo "--------------------<br>";
$person2->name = "Bob";
$person2->gender = "male";
$person2->age = "25";

echo "person2对象的名字是： ".$person2->name."<br>";
echo "person2对象的性别是： ".$person2->gender."<br>";
echo "person2对象的年龄是： ".$person2->age."<br>";
$person2->say();
$person2->walk();
echo "--------------------<br>";

$person3->name = "Jessie";
$person3->gender = "female";
$person3->age = "21";
echo "person3对象的名字是： ".$person3->name."<br>";
echo "person3对象的性别是： ".$person3->gender."<br>";
echo "person3对象的年龄是： ".$person3->age."<br>";
$person3->say();
$person3->walk();
echo "--------------------<br>";

