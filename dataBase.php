<?php
$host="remotemysql.com:3306";
$user='tErmskPHFi';
$contra="XVQL0kPGEc";
$base="tErmskPHFi";
$mysqli = new mysqli($host,$user,$contra,$base);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>