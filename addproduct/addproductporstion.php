<?php include "../connection.php"?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Product Details
</button>
<!-- show data -->
<table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
          <th scope="col">Product name</th>
          <th scope="col">Product Details</th>
          <!-- <th scope="col">Quantity </th> -->
          <th scope="col">Quantity </th>
          <th scope="col">price </th>
          <th scope="col">supplier </th>
          <th scope="col">category </th>
        </tr>
      </thead>
  <tbody>
   <?php
    include "view.php";
    if ($result){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_details = $row['product_details'];
        $product_Total_quantity = $row['product_Total_quantity'];
        $product_price = $row['product_price'];
        $Supplier_Name = $row['Supplier_Name'];
        $category = $row['category'];
   echo'
    <tr>
      <!-- <th scope="row">1</th> -->
      <tr>
        <td>'.$id.'</td>
        <td>'.$product_name.'</td>
        <td>'.$product_details.'</td>
        <td>'.$product_Total_quantity.'</td>
        <td>'.$product_price.'</td>
        <td>'.$Supplier_Name.'</td>
        <td>'.$category.'</td>
        <td><button class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal1">Edit</button>
            
            <a class="btn btn-danger" href="delete.php?deleteid='.$id.'" role="button">Delete</a>
          </td>
      </tr>
      ';}
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
        <h5 class="modal-title" id="exampleModalLabel">Add your product details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit.php" method ="post" >
            <div class="form-group">
                <label for="product_name">Product name</label>
                <input type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
                <label for="product_details">Product Details</label>
                <input type="text" class="form-control" name="product_details">
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Total Quantity</label>
                <input type="number" class="form-control" name="product_quantity">
            </div>
            <div class="form-group">
                <label for="product_price">Product price</label>
                <input type="number" class="form-control" name="product_price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Supplier</label>
                <select class="form-control" id="exampleFormControlSelect1" name="supplier">
                <?php
              // include('../connection.php'); 
              $supplier = "SELECT * FROM supplier";
              $result = mysqli_query($con,$supplier);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['Supplier_ID']?>"><?php echo $value['Supplier_Name']?></option>
                      <?php
                }
            }
            ?>
                </select>
              </div>
              <div class="form-group">
               
            
                <label for="exampleFormControlSelect1">Catagory</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category"> 

            <!-- <optgroup> -->
            <?php
            include('../connection.php'); 
            $category = "SELECT * FROM category";
            $result = mysqli_query($con,$category);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['id'] ?>"><?php echo $value['name']?> </option>
                      <?php
                }
            }
            ?>
                  <!-- <option>1</option> -->
                  <!-- <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option> -->
                </select>
              </div>
              <input type="submit" name ="submit" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edit modal -->

<!-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your product details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="product_name">Product name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="product_details">Product Details</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Total Quantity</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="product_price">Product price</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Supplier</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Catagory</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <input type="submit" name ="submit" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>            -->


<!-- another edit -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your product details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update.php" method ="post" >
        <input type="hidden" id="update_id" name="update_id" >
            <div class="form-group">
                <label for="product_name">Product name</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="form-group">
                <label for="product_details">Product Details</label>
                <input type="text" class="form-control" id="product_details" name="product_details">
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Total Quantity</label>
                <input type="number" class="form-control" id="product_quantity" name="product_quantity">
            </div>
            <div class="form-group">
                <label for="product_price">Product price</label>
                <input type="number" class="form-control"id="product_price" name="product_price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Supplier</label>
                <select class="form-control" id="exampleFormControlSelect1" id="supplier" name="supplier">
                <?php
              // include('../connection.php'); 
              $supplier = "SELECT * FROM supplier";
              $result = mysqli_query($con,$supplier);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['Supplier_ID']?>"><?php echo $value['Supplier_Name']?></option>
                      <?php
                }
            }
            ?>
                </select>
              </div>
              <div class="form-group">
               
            
                <label for="exampleFormControlSelect1">Catagory</label>
                <select class="form-control" id="exampleFormControlSelect1 category" name="category"> 

            <!-- <optgroup> -->
            <?php
            include('../connection.php'); 
            $category = "SELECT * FROM category";
            $result = mysqli_query($con,$category);
            if(mysqli_num_rows($result)>0){
                while($value = mysqli_fetch_array($result))
                {
                    ?>
                      <option value ="<?php echo $value['id'] ?>"><?php echo $value['name']?> </option>
                      <?php
                }
            }
            ?>
                  <!-- <option>1</option> -->
                  <!-- <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option> -->
                </select>
              </div>
              <input type="submit"  name ="update" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>




<!-- --------- -->
</div>
</div>  