<?php

$sname = 'localhost';
$uname = 'root';
$pass = '';
$dbname = 'login_form';

$conn = mysqli_connect($sname, $uname, $pass, $dbname);

if(!$conn){
  echo "Connection failed!";
}
