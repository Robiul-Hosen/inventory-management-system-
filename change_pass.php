
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inventory MAnagement system</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'profile.php';?>

        <!-- Page Content  -->
        <div id="content">
        <?php include 'header1.php';?>            
            <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Change your password
            </button>
            <!-- show data -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Password</th>
                </tr>
              </thead>
              <tbody>
                  <!-- <th scope="row">1</th> -->
                  
                </tr>
              </tbody>
            </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="post">
          <div class="form-group">
              <label for="supplier_name">Password</label>
              <input type="text" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
              <label for="supplier_address">New Password</label>
              <input type="text"  class="form-control" placeholder="New Password">
          </div>
          <div class="form-group">
              <label for="supplier_name">Confirm Password</label>
              <input type="number" class="form-control" placeholder="Confirm Password">
          </div>
          <input type="button" value="submit" class="btn btn-success btn-block">
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
        <h5 class="modal-title" id="exampleModalLabel">Supplier Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="post">
          <div class="form-group">
              <label for="supplier_name">supplier name</label>
              <input type="text" class="form-control" placeholder="Enter your supplier name">
          </div>
          <div class="form-group">
              <label for="supplier_address">supplier Address</label>
              <input type="text"  class="form-control" placeholder="Enter your supplier address">
          </div>
          <div class="form-group">
              <label for="supplier_name">supplier phone number</label>
              <input type="number" class="form-control" placeholder="Enter supplier phone number">
          </div>
          <input type="button" value="submit" class="btn btn-success btn-block">
      </form>
      </div>
    </div>
  </div>
</div>-->
            </div>

        
        </div>
    </div> 

    <?php include "footer.php"?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>