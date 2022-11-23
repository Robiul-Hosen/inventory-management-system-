<?php
 include '../connection.php';
 

    if(isset($_POST['update']))
    {   
        $id = $_POST['update_id'];
        $name = $_POST['supplier_name'];
        $address = $_POST['supplier_address'];
        $phone = $_POST['phone'];
        
        #sql for update supplier
        $sql = "UPDATE supplier SET Supplier_Name='$name',Address='$address',phone='$phone' WHERE Supplier_ID ='$id'";
        $updateresult = mysqli_query($con,$sql);

        if($updateresult)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: ./supplier.php");

        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>