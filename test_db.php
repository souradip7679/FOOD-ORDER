<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'code_camp_bd_fos');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
