<?php include "../connection.php" ;
    if(isset($_POST['submit']))
    {
      $product_name = $_POST['product_name'];
      $product_details = $_POST['product_details'];
      $product_quantity=$_POST['product_quantity'];
      $product_price=$_POST['product_price'];
      $supplier=$_POST['supplier'];
      $category=$_POST['category'];

      echo $product_name ;
      echo $product_details;
      echo $product_quantity ; 
      echo $product_price;
      echo $supplier;
      echo $category;
    
      $sql= "INSERT INTO `product`(`product_name`, `product_details`, `product_Total_quantity`, `product_price`, `Supplier_ID`, `Category_id`) VALUES ('$product_name','$product_details','$product_quantity','$product_price','$supplier','$category')";
      $result = mysqli_query($con,$sql);
      if($result){
        echo "Data Inserted successfully";
        header("Location: ./addproduct.php");
      }

      else{
        die (mysqli_error($con));
      }
    }
    ?>