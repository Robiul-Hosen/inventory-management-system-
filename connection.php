<?php
#database connection
$con = new mysqli('localhost','root'.'','','ims');

if(!$con){
    die (mysqli_error($con));
}

?>