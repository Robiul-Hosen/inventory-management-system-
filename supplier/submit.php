<?php include "../connection.php" ;
    if(isset($_POST['submit']))
    {
      $supplier_name = $_POST['supplier_name'];
      $supplier_address = $_POST['supplier_address'];
      $supplier_phone = $_POST['supplier_phone'];

      #sql for insert supplier
      $sql="insert into `supplier`(Supplier_Name,Address,phone)
      values ('$supplier_name','$supplier_address','$supplier_phone')";
      $result = mysqli_query($con,$sql);
      if($result){
        echo "Data Inserted successfully";
        header("Location: ./supplier.php");
      }

      else{
        die (mysqli_error($con));
      }
    }
    ?>