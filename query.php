<?php
/**
 * Created by PhpStorm.
 * User: LXChild
 * Date: 2015/6/26
 * Time: 19:25
 */
$conn = connectDb();
$result = mysql_query("SELECT * FROM users ORDER BY id DESC");
$dataCount = mysql_num_rows($result);


for($i = 0; $i < $dataCount; $i++) {
    $result_arr = mysql_fetch_assoc($result);

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];
}