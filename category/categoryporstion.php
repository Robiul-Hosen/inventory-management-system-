
<?php include "../connection.php"?>
<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add your category Details
</button>
<table class="table">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">category name</th>
        </tr>
      </thead>
  <tbody>
    <!-- fetch all data from category -->
  <?php
//   $con = new mysqli('localhost','root'.'','','anothertry');
// $sql = "SELECT * FROM `category`";
include "view.php";
$result = mysqli_query($con,$sql);
if ($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    // echo $id,$name;
    
    echo '
      <tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
        <td>
        
        <button class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal1">update</button>
            
            <a class="btn btn-danger "href="delete.php?deleteid='.$id.'" role="button">Delete</a>
            </td>
      </tr>';
      //older button delete
      // <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</button>

  }
}
?>
    <!-- <tr>
      <tr>
         <td>1</td>
         <td>Mark</td>
        <td><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Edit</button>
            <button class="btn btn-danger">Delete</button>
          </td>
      </tr> -->
      
    </tr>
  </tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="category" > category name</label>
                <input type="text" name="category" placeholder="Enter your category name" class="form-control" >
            </div>
            <input type="submit" name ="submit" class="btn btn-success">
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
        <h5 class="modal-title" id="exampleModalLabel">Edit your category details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
           <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
                <label for="category"> category name</label>
                <input type="text" name="category" id="category" placeholder="Enter your category name" class="form-control">
            </div>
            <input type="submit" name="update" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>