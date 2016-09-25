<?php

class Todo{

  protected $db;
  protected $collection;
  protected $document;

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

   //One Todo
   public function getTodo($id){

     $cursor = $this->collection->findOne(array('_id'=>new MongoId($id)));
     return $cursor;

   }

   //Add Todo to Database
   public function addTodo($postData){

     $this->name        = $postData['name'];
     $this->category    = $postData['category'];
     $this->priority    = $postData['priority'];
     $this->task_date   = $postData['task_date'];
     $this->description = $postData['description'];


     $this->document = array(
       "name"       => $this->name,
       "category"   => $this->category,
       "priority"   => $this->priority,
       "task_date"  => $this->task_date,
       "description"=> $this->description
      );
      // adding to database
      $this->collection->insert($this->document);

      //location
      header('Location: index.php');


   }
    //-----delete todo------//
    public function removeTodo($id){

      $cursor = $this->collection->remove(array('_id'=>new MongoId($id)));
      //Location
      header('Location: index.php');
    }

    //-----update todo------//
    public function updateTodo($id,$postUpdatedData){

           $this->name        = $postUpdatedData['name'];
           $this->category    = $postUpdatedData['category'];
           $this->priority    = $postUpdatedData['priority'];
           $this->task_date   = $postUpdatedData['task_date'];
           $this->description = $postUpdatedData['description'];

           $this->document = array(
             "name"       => $this->name,
             "category"   => $this->category,
             "priority"   => $this->priority,
             "task_date"  => $this->task_date,
             "description"=> $this->description
            );

            //update todo
          $this->collection->update(array('_id'=>new MongoId($id)),$this->document);  


    }

}


 ?>
