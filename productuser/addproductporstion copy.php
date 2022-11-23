<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Product Details
</button>
<!-- show data -->
<table class="table">
    <thead>
        <tr>
          <th scope="col">Product name</th>
          <th scope="col">Product Details</th>
          <th scope="col">Quantity </th>
          <th scope="col">Quantity </th>
          <th scope="col">price </th>
          <th scope="col">supplier </th>
          <th scope="col">category </th>
        </tr>
      </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>45435</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>45435</td>
        <td>45435</td>
        <td><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Edit</button>
            <button class="btn btn-danger">Delete</button>
          </td>
      </tr>
      
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
              <input type="submit" class="btn btn-success btn-block">
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
              <input type="submit" class="btn btn-success btn-block">
        </form>
      </div>
    </div>
  </div>
</div>           
</div>
</div>  