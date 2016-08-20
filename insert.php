<?php
/**
 * Created by PhpStorm.
 * User: LXChild
 * Date: 2015/6/26
 * Time: 18:46
 */
require_once 'functions.php';
if(!isset($_POST['name'])) {
    die('User name not define!');
}
if(!isset($_POST['age'])){
    die(' user age not define!');
}
$name = $_POST['name'];
if(empty($name)) {
    die('user name is empty!');
}

$age = $_POST['age'];
if(empty($age)) {
    die('user age is empty!');
}

connectDb();

$age = intval($age);

mysql_query("INSERT INTO users(name , age) VALUES ('$name', '$age')");

if(mysql_errno()){
    echo mysql_error();
} else {
   // header("Location:allusers.php");
}
