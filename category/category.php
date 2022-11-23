<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include "../header.php" ?>
<div class="container">
  <div class="row">
        <div class="col-2 mt-5">
        <?php include "../sidebar.php" ?>
        </div> 
        <div class="col-10 mt-3">
        <?php include 'categoryporstion.php';?>
        </div>
  </div>
</div>
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
                $('#category').val(data[1]);
            });
        });
</script>
<?php include "../footer.php" ?>
</body>
</html>
