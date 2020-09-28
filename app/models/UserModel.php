<?php

class UserModel extends Dmodel{

   public function __construct(){

    parent::__construct();
    }

    public function userList($table){
        $sql = "SELECT * FROM $table ORDER BY id DESC";
      return $this->db->select($sql);  
    }

    public function insertUser($table, $data){
        return $this->db->insert($table, $data);
    }

    public function delUserById($table, $cond){
        return $this->db->delete($table, $cond);

    }

    

    public function userById($table, $id){

        $sql = "select * from $table where id=:id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }

   

    public function userUpdate($table, $data, $cond){
        return $this->db->update($table, $data, $cond);

    }

}    
?>    