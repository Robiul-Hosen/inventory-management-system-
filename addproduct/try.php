<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="" id="">
            <optgroup>
            <?php
            include('../connection.php'); 
            $category = "SELECT * FROM category";
            $result = mysqli_query($con,$category);
            if(mysqli_num_rows($result)>0){
                while($state_row = mysqli_fetch_assoc($result))
                {
                    ?>
                      <option><?php echo $state_row['name']?> </option>
                      <?php
                }
            }
            ?>
            </optgroup>
            
        </select>
    </form>
</body>
</html>