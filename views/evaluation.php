<?php 
  include("controllers/catalogControllers.php");

  include("controllers/modalController.php");
?>

<div class="row my-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-dark">
        <div class="row">
          <div class="col-6">
            <h3 class="card-title text-light">Menu List</h3>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                  </div>
                  <div class="modal-body">
                  <form action="modalController.php" method="POST">
                    <div class="form-group my-2">
                      <input type="text" name="name" class="form-control" placeholder="Menu name" autofocus>
                    </div>
                    <select class="form-group form-select my-2" aria-label="Default select example" name="menu_parent">
                      <option selected>Select a menu parent</option>
                      
                    </select>
                    <div class="form-group my-2">
                      <textarea name="description" rows="2" class="form-control" placeholder="Description"></textarea>
                    </div>
                  </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-secondary" name="save_menu">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
      <table class="table table-bordered">
      <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Menu Parent</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          foreach($catalogList as $row) { ?>
            <tr>
              <td> <?php echo $row['id']?></td>
              <td> <?php echo $row['name']?></td>
              <td> <?php echo $row['menu_parent']?></td>
              <td> <?php echo $row['description']?></td>
            </tr>
        <?php } ?>
        </tbody>
      </table>
        
      </div>
    </div>

  </div>
  
  
</div>

