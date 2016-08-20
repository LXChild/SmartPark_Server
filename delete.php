<?php
/**
 * Created by PhpStorm.
 * User: LXChild
 * Date: 2015/6/26
 * Time: 19:06
 */
require_once 'functions.php';

if(empty($_GET['id'])){
    die('id is empty');
}

connectDb();

$id = intval($_GET['id']);

mysql_query("DELETE FROM users WHERE id = $id");

if(mysql_errno()){
    die('Failed to delete user wth id $id');
} else {
   // header("Location:allusers.php");
}