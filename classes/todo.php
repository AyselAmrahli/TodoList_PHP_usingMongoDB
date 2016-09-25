<?php

class Todo{

  protected $db;
  protected $collection;

  private $name;
  private $category;
  private $priority;
  private $task_date;
  private $description;

  public function __construct($db){

    $this->db = $db;
    $this->collection = $db->todos;
    // var_dump($this->collection);
  }

  //All Todos
   public function getTodos(){

     $cursor = $this->collection->find();
     return $cursor;

   }

   public function getTodo($id){

     $cursor = $this->collection->findOne(array('_id'=>new MongoId($id)));
     return $cursor;

   }

}


 ?>
