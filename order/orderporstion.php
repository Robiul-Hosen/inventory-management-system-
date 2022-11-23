<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Enter your order details
</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">order id</th>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
            <!-- <th scope="col">order id</th> -->
            <th scope="col">quantity</th>
          </tr>
      </thead>
  <tbody>
  <?php
//   $con = new mysqli('localhost','root'.'','','anothertry');
// $sql = "SELECT * FROM `category`";
include "view.php";
$result = mysqli_query($con,$sql);
if ($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['order_id'];
    $product_name = $row['product_name'];
    $price = $row['price'];
    $category = $row['category'];
    $quantity = $row['quantity'];
    echo '
    <tr>
      <!-- <th scope="row">1</th> -->
      <tr>
      <td>'.$id.'</td>
        <td>'.$product_name.'</td>
        <td>'.$price.'</td>
        <td>'.$category.'</td>
        <td>'.$quantity.'</td>
        <td><button class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal1">Edit</button>
        <a class="btn btn-danger "href="delete.php?deleteid='.$id.'" role="button">Delete</a>
          </td>
      </tr>';
    }
  }
  ?>
      
    </tr>
  </tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter your order details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit.php" method ="post">
        <div class="form-group">
                <label for="exampleFormControlSelect1">product name</label>
                <select class="form-control" id="exampleFormControlSelect1" id="supplier" name="product">
                <?php
              include('../connection.php'); 
              $product = "SELECT * FROM product";
              $result = mysqli_query($con,$product);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['product_id']?>"><?php echo $value['product_name']?></option>
                      <?php
                }
            }
            ?>
                </select>
                <!-- <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select> -->
              </div>
            <div class="form-group">
                <label for="product_name">price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">category</label>
                <select class="form-control" id="exampleFormControlSelect1" id="supplier" name="category">
                <?php
              include('../connection.php'); 
              $category = "SELECT * FROM category";
              $result = mysqli_query($con,$category);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                      <?php
                }
            }
            ?>
                </select>
              </div>
            <div class="form-group">
                <label for="quantity"> quantity</label>
                <input type="number" class="form-control" name="quantity">
            </div>
              <input type="submit" name="submit" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edit modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your order details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <form action="">
            <div class="form-group">
             <label for="product_name"> product name</label>
             <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="product_name">price</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">category</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            <div class="form-group">
                <label for="quantity"> quantity</label>
                <input type="number" class="form-control">
            </div>
              <input type="submit" class="btn btn-success btn-block">
        </form> -->
        <form action="update.php" method ="post">
        <input type="hidden" id="update_id" name="update_id" >
        <div class="form-group">
                <label for="exampleFormControlSelect1">product name</label>
                <select class="form-control" id="exampleFormControlSelect1" id="product" name="product">
                <?php
              include('../connection.php'); 
              $product = "SELECT * FROM product";
              $result = mysqli_query($con,$product);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['product_id']?>"><?php echo $value['product_name']?></option>
                      <?php
                }
            }
            ?>
                </select>
              </div>
            <div class="form-group">
                <label for="product_name">price</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">category</label>
                <select class="form-control" id="exampleFormControlSelect1" id="category" name="category">
                <?php
              include('../connection.php'); 
              $category = "SELECT * FROM category";
              $result = mysqli_query($con,$category);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                      <?php
                }
            }
            ?>
                </select>
              </div>
            <div class="form-group">
                <label for="quantity"> quantity</label>
                <input type="number" class="form-control" id ="quantity" name="quantity">
            </div>
              <input type="submit" name ="update" class="btn btn-success btn-block ">
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>