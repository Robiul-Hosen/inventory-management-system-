<?php
include '../connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    echo "$id";
    $sql="delete from `supplier` where Supplier_ID = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo"data deleted successfully";
        header("Location: ./supplier.php");
    }
    else{
        echo "not deleted";
    }
}
?>


