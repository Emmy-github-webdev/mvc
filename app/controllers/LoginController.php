<?php
/* LoginController */
class LoginController extends Dcontroller{

    public function __construct(){
        parent::__construct();
    }

    public function Index(){
        /* If($this->session->userdata("id"))
        return redirect("AdminController"); */
        $this->login();
    }

   public function login(){
    Session::init();
    if (Session::get("login") ==  true) {
      header("Location:".BASE_URL."/AdminController");
    }
       $this->load->view("login/login");
   }

   public function loginAuth(){
       $table = "tbl_users";
       $username = $_POST['username'];
       $password = md5($_POST['password']);
       $LoginModel = $this->load->model('LoginModel');
       $count = $LoginModel->userControl($table, $username, $password);
       
       if ($count > 0){
         $result = $LoginModel->getUserData($table, $username, $password);
         Session::init();
         Session::set("login", true);
         Session::set("username",$result[0]['username'] );
         Session::set("userid",$result[0]['id'] );
         Session::set("level",$result[0]['level'] );
         header("Location:".BASE_URL. "/AdminController");
       }else{
           header("Location:" .BASE_URL."/LoginController");
       }
   }

   public function logout(){
    Session::init();
    Session::destroy();
    header("Location:".BASE_URL."/LoginController");
   }
}
?>