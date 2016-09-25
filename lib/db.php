<?php

//connect MongoDB
$mongo = new MongoClient();

//select database
$db = $mongo->selectDB('todos');


 ?>
