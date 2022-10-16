<?php  include("controllers/catalogControllers.php"); ?>

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