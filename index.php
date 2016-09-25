<!-- include header -->
<?php include '_sections/_header.php'; ?>
<?php
    error_reporting(E_ALL);
    ini_set('display errors',1);

 ?>
<!-- create new object from Todo class -->
<?php $todo = new Todo($db); ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">My Todos</h1>
      <div class="row">
        <div class="col m6 push-m3">
          <div class="collection">

            <?php foreach($todo->getTodos() as $todo ) : ?>
            <a href="todo.php?id=<?php echo $todo["_id"]; ?>" class="collection-item"><?php echo $todo["name"]; ?></a>
          <?php endforeach; ?>

          </div>
        </div>
      </div>
      <br><br>
    </div>
  </div>


<!-- include footer -->
<?php include '_sections/_footer.php'; ?>
