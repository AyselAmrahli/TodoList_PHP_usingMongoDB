<!-- include header -->
<?php include '_sections/_header.php'; ?>
<?php
 $id = $_GET['id'];
 $todo = new Todo($db);

if (isset($_POST['submit'])) {
   $todo->updateTodo($id,$_POST);
}

 ?>

<div class="container">
 <div class="row">
     <form class="col s12" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
       <div class="row">
         <div class="input-field col s6">
           <input type="text" class="validate" name="name" value="<?php echo $todo->getTodo($id)["name"];  ?>">
           <label for="name">Todo Name</label>
         </div>
         <div class="input-field col s6">
             <select name="category">
               <option value="" disabled selected><?php echo $todo->getTodo($id)["category"];  ?></option>
               <option value="Family">Family</option>
               <option value="Work">Work</option>
               <option value="Social">Social</option>
             </select>
           </div>
       </div>
       <div class="row">
         <div class="input-field col s6">
           <input type="text" class="validate" name="description" value="<?php echo $todo->getTodo($id)["description"];  ?>">
           <label for="description">Todo Description</label>
         </div>
         <div class="input-field col s6">
             <select name="priority">
               <option value="" disabled selected><?php echo $todo->getTodo($id)["priority"];  ?></option>
               <option value="High">High</option>
               <option value="Low">Low</option>
               <option value="Normal">Normal</option>
             </select>
           </div>
       </div>
       <div class="row">
         <div class="input-field col s6">
             <input type="date" class="datepicker" name="task_date" value="<?php echo $todo->getTodo($id)["task_date"];  ?>">
              <label for="task_date">Date</label>
         </div>
       </div>
       <div class="row">
         <button class="btn waves-effect waves-light" type="submit" name="submit">Add
           <i class="material-icons right">send</i>
         </button>
       </div>
     </form>
   </div>
</div>



<!-- include footer -->
<?php include '_sections/_footer.php'; ?>
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});

$('.datepicker').pickadate({
   selectMonths: true, // Creates a dropdown to control month
   selectYears: 15 // Creates a dropdown of 15 years to control year
 });
</script>
