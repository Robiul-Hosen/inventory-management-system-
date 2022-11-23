<?php
include '../connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    #sql for delete category
    $sql="delete from `order_details` where order_id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo"data deleted successfully";
        header("Location: ./order.php");

    }
}
?>