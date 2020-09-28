<?php
/* Category Controller */
class CategoryController extends Dcontroller{

    
   public function __construct(){
       parent::__construct();
   }

   public function categoryList(){
        $data = array();
        $table = 'categories';
       $CatModel = $this->load->model('CatModel');
       $data['cat'] = $CatModel->catList($table);
       $this->load->view("category", $data);
   }

   public function catById(){
     $data = array();
     $table = 'categories';
     $id = 1;
     $CatModel = $this->load->model('CatModel');
     $data['catbyid'] = $CatModel->catByid($table, $id);
     $this->load->view("catbyid", $data);

   }

   public function addCategory(){
      $this->load->view("addcategory");

   }

   public function insertCategory(){
      $table = 'categories';

      $name = $_POST['name'];
      $title = $_POST['title'];

      $data = array(
         'name' => $name,
         'title' => $title
      );
      $CatModel = $this->load->model('CatModel');
      $result = $CatModel->insertCat($table, $data);

      $mdata = array();

      if ($result == 1) {
         $mdata ['msg'] = 'Category Added Successfully ...';
      }else {
         $mdata ['msg'] = "Category Not Added ...";
      }

      $this->load->view("addcategory", $mdata);

   }

   public function updateCategory(){
      $data = array();
      $table = 'categories';
      $id = 12;
      $CatModel = $this->load->model('CatModel');
      $data['catByid'] = $CatModel->catByid($table, $id);
      $this->load->view("catupdate", $data);

   }

   public function updateCat(){
      $table = 'categories';

      $id = $_POST['id'];
      $name = $_POST['name'];
      $title = $_POST['title'];

      $cond = "id=$id";
      $data = array(
         'name' => $name,
         'title' => $title
      );
      $CatModel = $this->load->model('CatModel');
      $result = $CatModel->catUpdate($table, $data, $cond);

      $mdata = array();

      if ($result == 1) {
         $mdata ['msg'] = 'Category Updated Successfully ...';
      }else {
         $mdata ['msg'] = "Category Not Updated ...";
      }

      $this->load->view("catupdate", $mdata);

   }

   public function deleteCatById(){
      $table = 'categories';
      $cond = "id=1";
      $CatModel = $this->load->model('CatModel');
      $CatModel->delCatById($table, $cond);
   }
}
?>