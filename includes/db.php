<?php

$db['db_host'] = "localhost";
$db['db_user'] = "Carl";
$db['db_pass']  = "Carl";
$db['db_name']  =   "ehospital";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>