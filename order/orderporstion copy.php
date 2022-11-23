<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Enter your order details
</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
            <th scope="col">order id</th>
            <th scope="col">quantity</th>
          </tr>
      </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <tr>
        <td>juice</td>
        <td>20</td>
        <td>1</td>
        <td>2231</td>
        <td>2</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Enter your order details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
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
        <form action="">
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
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>