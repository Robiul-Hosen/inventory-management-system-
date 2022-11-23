<?php include "../connection.php" ;
    if(isset($_POST['submit']))
    {
      $product = $_POST['product'];
      $price = $_POST['price'];
      $category=$_POST['category'];
      $quantity=$_POST['quantity'];
    //   echo $product,$price,$category,$quantity;
    
      $sql= "INSERT INTO `order_details`(`Product_name`, `price`, `Category_id`, `quantity`) VALUES ('$product','$price','$category','$quantity')";
      $result = mysqli_query($con,$sql);
      if($result){
        echo "Data Inserted successfully";
        header("Location: ./order.php");
      }

      else{
        die (mysqli_error($con));
      }
    }
    ?>