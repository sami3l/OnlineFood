
<?php

    include_once("../config/config.php");
    class Admin{
        
         public $db;
      public function __construct(){ 
           $this->db = new Database();
      }

      public function AAdmin($data){
          $name = $data["fullname"];
          $user = $data["username"];
          $password = $data["password"];

          $query = "INSERT INTO `admin`(`full_name`, `username`, `password`) VALUES ('$name' , '$user' , '$password')";
           
          $result = $this->db->insert($query);
            if($result){
          echo 'succes';
       }
     }  

      public function show( ){

        $query = "SELECT * FROM `admin` ORDER BY id DESC"; 
        $res = $this->db->show($query);
        return $res;

    }
    public function showid($id){

      $query = "SELECT * FROM `admin` WHERE id = '$id'"; 
      $res = $this->db->show($query);
      return $res;

  }
  public function login($username ,$password){

    $query = "SELECT * FROM `admin` WHERE username = '$username' AND pasword = '$password'"; 
    $res = $this->db->show($query);
    return $res;

}
    public function update($data , $file , $id){

      $name = $data["fullname"];
      $user = $data["username"];
      

      $query = "UPDATE `admin` SET full_name = '$name' , username = '$user' WHERE id = '$id' ";
       
      $result = $this->db->insert($query);
        if($result){
       echo 'succes';
   }

  }
  }
?>  