<?php
include '../connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    echo $id;
    #sql for delete category
    $sql="delete from `Product` where product_id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo"data deleted successfully";
        header("Location: ./addproduct.php");

    }
}
?>