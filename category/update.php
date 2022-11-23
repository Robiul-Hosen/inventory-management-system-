<?php
 include "../connection.php" ;
 

    if(isset($_POST['update']))
    {   
        $id = $_POST['update_id'];
        $category = $_POST['category'];
        $sql = "UPDATE category SET name='$category' WHERE id='$id'";
        $updateresult = mysqli_query($con,$sql);

        if($updateresult)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: ./category.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>