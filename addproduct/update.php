<?php
 include "../connection.php";

 if(isset($_POST['update']))
{
    $id = $_POST['update_id'];
    $product_name = $_POST['product_name'];
    $product_details = $_POST['product_details'];
    $product_quantity=$_POST['product_quantity'];
    $product_price=$_POST['product_price'];
    $supplier=$_POST['supplier'];
    $category=$_POST['category'];
    // echo "$id";
    echo "$id,$product_name,$product_details,$product_quantity,$product_price,$supplier,$category";

    $sql = "UPDATE product SET product_id='$id',product_name='$product_name',product_details='$product_details',product_Total_quantity='$product_quantity', product_price='$product_price',Supplier_ID='$supplier',
    Category_id='$category' WHERE product_id ='$id'";
    $updateresult = mysqli_query($con,$sql);
            if($updateresult){
                echo"Data updated successfully";
                header('Location: ./addproduct.php');
            }
            else{
                echo '<script> alert("Data Not Updated"); </script>';
            }
}


?>


<!-- product_id
product_name
product_datails
product_Total_quantity
product_price
Supplier_ID
Category_id -->