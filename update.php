<?php
/**
 * Created by PhpStorm.
 * User: LXChild
 * Date: 2015/6/26
 * Time: 19:07
 */
require_once 'functions.php';
if (!empty($_GET['id'])) {
    connectDb();

    $id = intval($_GET['id']);

    $result = mysql_query("SELECT * FROM users WHERE id = $id");
    if (mysql_error()) {
        die('can not connect db');
    }

    $arr = mysql_fetch_assoc($result);
} else {
    die('id not define!');
}