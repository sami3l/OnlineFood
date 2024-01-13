
<?php

    include_once("../config/config.php");
         

    class Client{
        
         public $db;
         
      public function __construct(){ 
           $this->db = new Database();
      }

      public function Add($data){
          $joined = $data["joined"];
          $user = $data["username"];
          $password = $data["password"];
          
          

          $query = "INSERT INTO `users`(`username`, `password`, `joined`) VALUES ( '$user' , '$password', '$joined'";
           
          $result = $this->db->login($query);
            if($result){
          echo 'succes';
       }
     }  

      public function show( ){

        $query = "SELECT * FROM `users` ORDER BY id DESC"; 
        $res = $this->db->show($query);
        return $res;

    }
    public function showid($id){

      $query = "SELECT * FROM `users` WHERE id = '$id'"; 
      $res = $this->db->show($query);
      return $res;

  }
  public function login($username ,$password){


    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
    $query = $this->db->show($sql);

    if($query->num_rows > 0){
        $row = $query->fetch_array();
        return $row['id'];
      
    }
    else{
        return false;
    }

}

public function update($data , $file , $id){

    
     $user = $data["username"];
   $name = $data["password"];

  $query = "UPDATE `admin` SET username = '$user' , password = '$name' WHERE id = '$id' ";
   
  $result = $this->db->insert($query);
    if($result){
   echo 'succes';
}

}
}
  
?>  