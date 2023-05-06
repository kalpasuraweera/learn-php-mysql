<?php

$conn= mysqli_connect('localhost','donets_admin','12345678','donets');
if(!$conn){
    die("Not Connected".mysqli_error($conn));
}

?>