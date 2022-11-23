<?php
 include "../connection.php";

 if(isset($_POST['update']))
{
    $id = $_POST['update_id'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    // echo "$id";
    echo "$id,$product,$price,$category,$quantity";

    $sql = "UPDATE order_details SET Product_name='$product',price='$price',Category_id='$category',
    quantity='$quantity' WHERE order_id ='$id'";
    $updateresult = mysqli_query($con,$sql);
            if($updateresult){
                echo"Data updated successfully";
                header('Location: ./order.php');
            }
            else{
                echo '<script> alert("Data Not Updated"); </script>';
            }
}


?>
