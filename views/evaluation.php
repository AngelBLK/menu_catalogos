<?php ?>

      <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
          <?=$_SESSION['message']?> <strong>Successfully </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php session_unset();}?>

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
            <?php include("modal.php");?>
          </div>
        </div>
      </div>
      <?php include("listTable.php");?>
    </div>

  </div>
  
  
</div>

