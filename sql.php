<?php
//数据库配置文件
header("Content-Type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "sgg1710";
$dbname = "qiaoqiaohua";
$conn= mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
