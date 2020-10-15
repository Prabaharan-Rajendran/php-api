<?php
$con = mysqli_connect("localhost", "root", "", "api_db");
if (mysqli_connect_errno($con)) {
    echo '{"status":"false","error":"failed to connect with database"}';
    return;
}
