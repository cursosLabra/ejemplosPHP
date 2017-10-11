<?php
$USERNAME="pepe";
$PASSWORD="pepe";

/*
$db = mysqli_connect("localhost", $USERNAME, $PASSWORD);
if (!$db) {
    die("No se puede conectar a base de datos");
} */

$db = mysqli_connect("localhost", $USERNAME, $PASSWORD)
or die("No se puede conectar a base de datos");




