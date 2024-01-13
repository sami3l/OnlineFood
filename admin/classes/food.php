
<?php

    class Food{
        
         public $db;
      public function __construct(){ 
           $this->db = new Database();
      }

      public function AddFood($data){
         
          $title = $data["title"];
          $desc = $data["description"];
          $price = $data["price"];
          $cat_id = $data["category_id"];
          $active = $data["active"];

          $query = "INSERT INTO `tbl_food`(`title`,`description`,`price`, `category_id`, `active`) VALUES ('$title' , '$desc', '$price', '$cat_id', '$active')";
           
          $result = $this->db->insert($query);
            if($result){
          echo 'succes';
       }
     }  

      public function show( ){

        $query = "SELECT * FROM `tbl_food` ORDER BY id DESC"; 
        $res = $this->db->show($query);
        return $res;

    }
    
    public function showid($id){

      $query = "SELECT * FROM `tbl_food` WHERE id = '$id'"; 
      $res = $this->db->show($query);
      return $res;

  }

  public function update($data , $file , $id){

    $title = $data["title"];
    $desc = $data["description"];
    $price = $data["price"];
    $cat_id = $data["category_id"];
    $active = $data["active"];


    $query = "UPDATE tbl_food SET title  = '$title' , description = '$desc', price = '$price', category_id = '$cat_id' , active = $active WHERE id = '$id' ";
     
    $result = $this->db->insert($query);
      if($result){
     echo 'succes';
 }

}
}
?>  