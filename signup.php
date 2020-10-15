<?php
require_once('db_connection.php');

$username = $_GET['username'];
$passWord = $_GET['password'];
$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];

$sql = "INSERT INTO `project_db`.`user` ( `username`, `password`,`name`,`email`,`mobile`) VALUES ('$username', '$passWord','$name','$email','$mobile');";
$result = mysqli_query($con, $sql);
if ($result == true) {
    Response::print_success();
} else {
    Response::print_error();
}
mysqli_close($con);
return;
