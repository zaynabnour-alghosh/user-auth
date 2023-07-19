<?php
$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "auth";
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
if (!$mysqli) {
    die('a connection was unsuccesful');
}
