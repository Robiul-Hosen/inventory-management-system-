<!-- database connection -->
  <?php
    include "../connection.php"
  ?>
    <!-- Button trigger modal -->
    
    <div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Supplier
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone </th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <!-- fetch all supplier data -->
  <tbody>
    <?php
    // $con = new mysqli('localhost','root'.'','','anothertry');
    // $sql = "SELECT * FROM `supplier`";
    include "view.php";
    $result = mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $supplierid = $row['Supplier_ID'];
        $suppliername = $row['Supplier_Name'];
        $address =  $row['Address'];
        $phone = $row['phone'];
    echo' 
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>'.$supplierid.'</td>
      <td>'.$suppliername.'</td>
      <td>'.$address.'</td>
      <td>'.$phone.'</td>
      <td><button class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal1">update</button>
      <a class="btn btn-danger" href="delete.php?deleteid='.$supplierid.'" role="button">Delete</a>
      </td>';
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
        <h5 class="modal-title" id="exampleModalLabel">Supplier Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="submit.php" method= "POST">
          <div class="form-group">
              <label for="supplier_name">supplier name</label>
              <input type="text" name="supplier_name" class="form-control" placeholder="Enter your supplier name">
          </div>
          <div class="form-group">
              <label for="supplier_address">supplier Address</label>
              <input type="text" name="supplier_address" class="form-control" placeholder="Enter your supplier address">
          </div>
          <div class="form-group">
              <label for="supplier_phone">supplier phone number</label>
              <input type="number" name="supplier_phone" class="form-control" placeholder="Enter supplier phone number">
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
        <h5 class="modal-title" id="exampleModalLabel">Supplier Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
        <input type="hidden" name="update_id" id="update_id">
          <div class="form-group">
              <label for="supplier_name">supplier name</label>
              <input type="text" class="form-control" name="supplier_name" id="supplier_name" placeholder="Enter your supplier name">
          </div>
          <div class="form-group">
              <label for="supplier_address">supplier Address</label>
              <input type="text" name="supplier_address" 
              id ="supplier_address"
              class="form-control" placeholder="Enter your supplier address">
          </div>
          <div class="form-group">
              <label for="supplier_name">supplier phone number</label>
              <input type="number" name="phone"
              id="phone" placeholder="Enter supplier phone number"  class="form-control">
          </div>
          <input type="submit" name="update" class="btn btn-success">
      </form>
      </div>
    </div>
  </div>
</div>

  

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


  <!-- edit jquery -->
  <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#supplier_name').val(data[1]);
                $('#supplier_address').val(data[2]);
                $('#phone').val(data[3]);
            });
        });
</script>