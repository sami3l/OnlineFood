<?php 
  
  class Database{
     
       public $host = 'localhost:3307';
       public $user = 'root';
       public $pass = '';
       public $database = 'food-order';

       public $link ;
       public $error ;

       public function __construct(){
            $this->dbconnect();
       }
       public function dbconnect(){
          $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->database);

          if(!$this->link){

            $this->error = mysqli_connect_error();
            return false;

          }
       }

       public function insert($query){

         $result = mysqli_query($this->link,$query);
         if(!$result){
          return false;
         }else{
            return $result;
         }


       }
       public function login($query){

        $result = mysqli_query($this->link,$query);
        if(!$result){
         return false;
        }else{
           return $result;
        }


      }

       public function show($query){

        $result = mysqli_query($this->link,$query);

         if(mysqli_num_rows($result) > 0){
          return $result;
         }else{
            return false;
         }
       }


}
?>