<?php

class PostModel extends Dmodel{

  public function __construct(){

    parent::__construct();
  }

  public function getAllPost($table){
    $sql = "select * from $table order by id desc limit 3";
    return $this->db->select($sql);  
  }

  public function PostById($tablePost, $id){
    $sql = "SELECT * FROM $tablePost WHERE id=$id";
    return $this->db->select($sql);  
  }

  public function getPostList($table){
    $sql = "SELECT * FROM $table ORDER BY id DESC";
  return $this->db->select($sql);  
}

  public function getPostById($tablePost, $tableCat, $id){
    $sql = "SELECT $tablePost.*, $tableCat.name from $tablePost
    INNER JOIN $tableCat
    ON $tablePost.cat = $tableCat.id
    WHERE $tablePost.id = $id
    ";
    return $this->db->select($sql);  
  }

  public function getPostBycat($tablePost, $tableCat, $id){
    $sql = "SELECT $tablePost.*, $tableCat.name from $tablePost
    INNER JOIN $tableCat
    ON $tablePost.cat = $tableCat.id
    WHERE $tableCat.id = $id
    ";
    return $this->db->select($sql);
  }

  public function getlatestPost($table){
    $sql = "select * from $table order by id desc limit 5";
    return $this->db->select($sql);
  }

  public function getPostBysearch($tablePost, $keyword, $cat){

    if (isset($keyword) && !empty($keyword)){
      $sql = "SELECT * FROM $tablePost WHERE title Like  '%$keyword%' OR content Like  '%$keyword%'";
    }elseif (isset($cat)) {
      $sql = "SELECT * FROM $tablePost WHERE cat = $cat";
    }else{
      echo "No matching keyword found";
    }
   
    return $this->db->select($sql);
  }


  public function insertpost($tablePost, $data){
    return $this->db->insert($tablePost, $data);
  }

  public function postUpdate($table, $data, $cond){
    return $this->db->update($table, $data, $cond);
  }

  public function delPostById($table, $cond){
  return $this->db->delete($table, $cond);

  }
}
?>