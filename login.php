<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <link rel="stylesheet" href="style1.css">
     <link rel="stylesheet" type="text/css" href="loginregistrationpage.css">
    <title>Login</title>
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
              <a class="nav-link" href="registration.php">Registration</a>
            </li>
          </ul>
      </nav>
       
      </div>
      <div class="container pt-3">
        <h1>Log In</h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1"> Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
            </div>
            <div>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" placeholder="Enter your password" id="exampleInputPassword1" class="form-control">
            </div>
            
            <input type="submit" name="login" class="btn btn-success mt-2">
        </form>
      </div>
      <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <!-- <div class="text-center p-3" style="background-color: rrgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">Inventorymanagement.com</a>
        </div> -->
        <!-- Copyright -->
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
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $sql="select Email,password from users where Email='$email' and password='$pass'";
    $sql1="select Email,password from  supplier where Email='$email' and password='$pass'";
            $r=mysqli_query($con,$sql);
            $r1=mysqli_query($con,$sql1);
            if(mysqli_num_rows($r)>0)
            {
                $_SESSION['email']=$email;
                $_SESSION['admin_login_status']="loged in";
                
                header("Location:profile_setting.php");
            }
            
            else if(mysqli_num_rows($r1)>0)
            {
                $_SESSION['email']=$email;
                $_SESSION['suplier_login_status']="loged in";
                header("Location:./category/category.php");
                // header("Location:productuser/addproduct.php");
            }
            else
            {
                echo "<p style='color: red;'>Incorrect UserId or Password</p>";
            }
  
}
?>