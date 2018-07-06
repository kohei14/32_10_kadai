<?php
session_start();
$id = session_id();
$_SESSION["name"]="nagamura";
$_SESSION["sex"]="male";
echo $id;
?>