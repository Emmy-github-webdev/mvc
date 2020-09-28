<?php
/* Index Controller */
class IndexController extends Dcontroller{

    
   public function __construct(){
       parent::__construct();
   }

   public function Index(){
      $this->home();
   }

   public function home(){

      $data = array();
      $tableCat = 'categories';
      $tablePost = 'posts';
      $this->load->view("header");


       $CatModel = $this->load->model('CatModel');
       $data['catlist'] = $CatModel->catList($tableCat);
      $this->load->view("search", $data);

       
      
      $PostModel = $this->load->model('PostModel');
      $data['allpost'] = $PostModel->getAllPost($tablePost);
      $this->load->view("content", $data);
    

      
      //$data['catlist'] = $CatModel->catList($tableCat);
      $data['latestpost'] = $PostModel->getlatestPost($tablePost);
      $this->load->view("sidebar", $data);


      $this->load->view("footer");
   }

   public function postDetails($id){
      $dtat = array();
      $tableCat = 'categories';
      $tablePost = 'posts';
      $this->load->view("header");


       $CatModel = $this->load->model('CatModel');
       $data['catlist'] = $CatModel->catList($tableCat);
      $this->load->view("search", $data);


      $PostModel = $this->load->model('PostModel');
      $data['postbyid'] = $PostModel->getPostById($tablePost, $tableCat, $id);

      $this->load->view("details", $data);   
     
      $data['latestpost'] = $PostModel->getlatestPost($tablePost);
      $this->load->view("sidebar", $data);
      $this->load->view("footer");
      
   }

   public function postByCat($id){

      $tableCat = 'categories';
      $tablePost = 'posts';
      $this->load->view("header");


       $CatModel = $this->load->model('CatModel');
       $data['catlist'] = $CatModel->catList($tableCat);
      $this->load->view("search", $data);


      $PostModel = $this->load->model('PostModel');
      $data['getcat'] = $PostModel->getPostBycat($tablePost, $tableCat, $id);

      $this->load->view("postbycat", $data);
     
      
      $data['latestpost'] = $PostModel->getlatestPost($tablePost);
      $this->load->view("sidebar", $data);
      $this->load->view("footer");

   }

   public function search(){
      $data = array();
      $keyword = $_REQUEST['keyword'];
      $cat = $_REQUEST['cat'];

      
      $tableCat = 'categories';
      $tablePost = 'posts';
      $this->load->view("header");


       $CatModel = $this->load->model('CatModel');
       $data['catlist'] = $CatModel->catList($tableCat);
      $this->load->view("search", $data);


      $PostModel = $this->load->model('PostModel');
      $data['postbysearch'] = $PostModel->getPostBysearch($tablePost, $keyword, $cat);

      $this->load->view("sreseult", $data);
     
      
      $data['latestpost'] = $PostModel->getlatestPost($tablePost);
      $this->load->view("sidebar", $data);
      $this->load->view("footer");
   }

}
?>