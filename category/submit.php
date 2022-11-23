<?php include "../connection.php" ;
    if(isset($_POST['submit']))
    {
      $category = $_POST['category'];

      #sql for insert category
      $sql="insert into `category`(name)
      values ('$category')";
      $result = mysqli_query($con,$sql);
      if($result){
        echo "Data Inserted successfully";
        header("Location: ./category.php");
      }

      else{
        die (mysqli_error($con));
      }
    }
    ?>