<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style1.css">
     <link rel="stylesheet" type="text/css" href="loginregistrationpage.css">
    <title>Registration</title>
  </head>
  <body>

    <!-- Image and text -->
    <!-- navbar navbar-light bg-light  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right ">
        <a class="navbar-brand" href="homepage.php">Inventory Management</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
        </ul>
      </nav>
       
      </div>
      <div class="container pt-3">
        <h1>Registration</h1>
        <form action="registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Name"> Name</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
            </div>
            <div>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" placeholder="Enter your password" id="exampleInputPassword1" class="form-control">
            </div>
            
            <input type="submit" name="ok" class="btn btn-success mt-2">
        </form>
      </div>
      <footer class="bg-light text-center text-lg-start">
      </footer>
    
    <!-- Optional JavaScript; choose one of the two! -->
<?php include("footer.php") ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
include("connection.php");
if(isset($_POST['ok']))                              
{
  echo "sdyfisuartui";
  // to receive value from the input fields
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  //echo $name;
  //customer id generation
  //$num=rand(100,1000);
  //echo $num;
  //$cus_id="c-".$num;                
  
  //image upload code
  //$ext= explode(".",$_FILES['pic']['name']);      
   // $c=count($ext);
   // $ext=$ext[$c-1]; 
  //echo $ext;
   // $date=date("D:M:Y");
  //echo $date;
   // $time=date("h:i:s");
  //echo $date.$time.$cus_id;
   // $image_name=md5($date.$time);  
   // $image=$image_name.".".$ext;
  //echo $image;
   
  
  
  $query="insert into users(Name,Email,password) values('$name','$email','$pass')";
  
  if(mysqli_query($con,$query))
  {
    echo "Successfully inserted!";
    // if($image !=null){
    //               move_uploaded_file($_FILES['pic']['tmp_name'],"uploadedimage/$image");
    //                 }
     }
  else
  {
    echo "error!".mysqli_error($con);
  }
}
?>