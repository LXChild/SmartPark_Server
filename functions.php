<?php
/**
 * Created by PhpStorm.
 * User: LXChild
 * Date: 2015/6/26
 * Time: 19:01
 */
require_once 'config.php';

function connectDb() {
    $conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);
    if(!$conn) {
        die('Can not connect db');
    }
    mysql_select_db(SAE_MYSQL_DB, $conn);

    return $conn;
}