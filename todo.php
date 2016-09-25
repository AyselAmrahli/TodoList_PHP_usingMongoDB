<!-- include header -->
<?php include '_sections/_header.php'; ?>
<?php
    error_reporting(E_ALL);
    ini_set('display errors',1);
$id = $_GET['id'];
 ?>
<!-- create new object from Todo class -->
<?php $todo = new Todo($db); ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <ul class="collection with-header">
        <li class="collection-header"><h4><?php echo $todo->getTodo($id)["name"]; ?></h4></li>
        <li class="collection-item"><div>Category: <?php echo $todo->getTodo($id)["category"]; ?></div></li>
        <li class="collection-item"><div>Priority: <?php echo $todo->getTodo($id)["priority"]; ?></div></li>
        <li class="collection-item"><div>Date:&nbsp &nbsp<?php echo date('Y-m-d H:m:s',$todo->getTodo($id)["task_date"]->sec); ?></div></li>
      </ul>
      <div>
        <p>Todo Description:</p>
    <h5 class="left-align"><?php echo $todo->getTodo($id)["description"]; ?></h5>
  </div>
    </div>
  </div>


<!-- include footer -->
<?php include '_sections/_footer.php'; ?>
