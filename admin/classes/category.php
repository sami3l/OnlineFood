
<?php

    include_once("../config/config.php");
    class Category{
        
         public $db;
      public function __construct(){ 
           $this->db = new Database();
      }

      public function ACategory($data){
          $title = $data["title"];
          $active = $data["active"];

          $query = "INSERT INTO `tbl_category`(`title`, `active`) VALUES ('$title' , '$active')";
           
          $result = $this->db->insert($query);
            if($result){
          echo 'succes';
       }
     }  

      public function show( ){

        $query = "SELECT * FROM `tbl_category` ORDER BY id DESC"; 
        $res = $this->db->show($query);
        return $res;

    }
    
    public function showid($id){

      $query = "SELECT * FROM `tbl_category` WHERE id = '$id'"; 
      $res = $this->db->show($query);
      return $res;

  }

  public function update($data , $file , $id){

    $title = $data["title"];
    $active = $data["active"];

    $query = "UPDATE tbl_category SET title  = '$title' , active = '$active' WHERE id = '$id' ";
     
    $result = $this->db->insert($query);
      if($result){
     echo 'succes';
 }

}
}
?>  