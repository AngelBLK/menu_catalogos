<?php  
  require_once "controllers/catalogControllers.php"; 
  require_once "controllers/deleteController.php";
?>

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
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>

              <a href="index.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
      <?php } ?>
    </tbody>
  </table> 
</div>