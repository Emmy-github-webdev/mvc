<?php
/* UserController */
class UserController extends Dcontroller{

    function __construct(){
        parent::__construct();
        
    }

    public function Index(){
        $this->adduser();
    }

    public function adduser(){
       $this->load->view('admin/header');
       $this->load->view('admin/sidebar');
       $this->load->view("admin/adduser");
       $this->load->view('admin/footer');

    }

    public function insertUser(){
        if (!($_POST)){
            header("Location:" .BASE_URL."/UserController");
        }

        $table = ' tbl_users';
  
        $username = $_POST['username'];
        $password = md5( $_POST['password']);
        $level = $_POST['level'];
  
        $data = array(
           'username' => $username,
           'password' => $password,
           'level' => $level
        );
        $UserModel = $this->load->model('UserModel');
        $result = $UserModel->insertUser($table, $data);
  
        $mdata = array();
  
        if ($result == 1) {
           $mdata['msg'] = 'User Added Successfully ...';
        }else {
            $mdata['msg'] = "User Not Added ...";
        }
        $url = BASE_URL."/UserController/listuser?msg".urlencode(serialize($mdata));
        header("Location:$url");

    }

    public function listuser(){
       $data = array();
       $table = 'tbl_users';
       $UserModel = $this->load->model('UserModel');
       $data['ulist'] = $UserModel->userList($table);
       $this->load->view('admin/header');
       $this->load->view('admin/sidebar');
       $this->load->view("admin/userlist", $data);
       $this->load->view('admin/footer');
    }

    public function deleteUser($id = NULL){
        $table = 'tbl_users';
        $cond = "id=$id";
        $UserModel = $this->load->model('UserModel');
        $result = $UserModel->delUserById($table, $cond);

        $mdata = array();
  
        if ($result == 1) {
           $mdata ['msg'] = 'User Deleted Successfully ...';
        }else {
           $mdata ['msg'] = "User Not Deleted ...";
        }
  
        $url = BASE_URL."/UserController/listuser?msg".urlencode(serialize($mdata));
        header("Location:$url");
    }
}    
?>    