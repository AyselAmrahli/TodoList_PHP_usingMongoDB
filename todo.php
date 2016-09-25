<!-- include header -->
<?php include '_sections/_header.php'; ?>
<?php  $id = $_GET['id']; ?>

<?php
if (isset($_POST['DeleteSubmit'])) {
  $todo = new Todo($db);
  $todo->removeTodo($id);
}

 ?>



<!-- create new object from Todo class -->
<?php $todo = new Todo($db); ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <ul class="collection with-header">
        <li class="collection-header text_color"><h4><?php echo $todo->getTodo($id)["name"]; ?></h4></li>
        <li class="collection-item"><div>Category: <?php echo $todo->getTodo($id)["category"]; ?></div></li>
        <li class="collection-item"><div>Priority: <?php echo $todo->getTodo($id)["priority"]; ?></div></li>
        <!-- <li class="collection-item"><div>Date:&nbsp &nbsp<?php //echo date('Y-m-d H:m:s',$todo->getTodo($id)["task_date"]->sec); ?></div></li> -->
        <li class="collection-item"><div>Date:&nbsp &nbsp<?php echo $todo->getTodo($id)["task_date"]; ?></div></li>
      </ul>
      <div>
        <p>Todo Description:</p>
    <h5 class="left-align"><?php echo $todo->getTodo($id)["description"]; ?></h5>
  </div>
<div class="row">
        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input type="hidden" name="idField" value="<?php echo $id; ?>">
          <button class="btn waves-effect waves-light" style="float:right; background-color:#b71c1c;"type="submit" name="DeleteSubmit">Delete
            <i class="material-icons right">delete</i>
          </button>
        </form>

    <a class="btn waves-effect waves-light" href="edit.php?id=<?php echo $id; ?>" style="float:right; margin-right:10px;">Edit
      <i class="material-icons right">edit</i>
    </a>
</div>

    </div>
  </div>


<!-- include footer -->
<?php include '_sections/_footer.php'; ?>
