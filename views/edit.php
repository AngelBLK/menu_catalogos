<?php
  require_once "controllers/editController.php";
?>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
      </div>
      <!-- Formulario para Guardar -->
      <form action="index.php?id="<?php echo $_GET['id'];?> method="POST">
        <div class="modal-body">
          <div class="form-group my-2">
            <input type="text" name="name" class="form-control" placeholder="Menu name" autofocus value="<?php echo $data['menu']?>">
          </div>
          <select class="form-group form-select my-2" aria-label="Default select example" name="menu_parent[]" aria-placeholder="Select One">
            <option >Select a menu parent</option>
            <?php 
              foreach($menuList as $row) { ?>
                <option value="<?php $row['name']?>"><?php echo $row['name']?></option>
            <?php } ?>
                        
          </select>
          <div class="form-group my-2">
            <textarea name="description" rows="2" class="form-control" placeholder="Description"><?php echo $description ?></textarea>
          </div>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-secondary" name="save_menu">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>