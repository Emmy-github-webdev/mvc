<?php
/* AdminController */
class AdminController extends Dcontroller{

    public function __construct(){
        parent::__construct();
        Session::checkSession();
       /*  If(!$this->session->userdata("id"))
          return redirect("LoginController/login"); */
    }

    public function Index(){
        $this->home();
    }

    public function home(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/home');
        $this->load->view('admin/footer');
    }

    public function addCategory(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view("admin/addcategory");
        $this->load->view('admin/footer');
  
    }

    public function categoryList(){
        $data = array();
        $table = 'categories';
       $CatModel = $this->load->model('CatModel');
       $data['cat'] = $CatModel->catList($table);
       $this->load->view('admin/header');
       $this->load->view('admin/sidebar');
       $this->load->view("admin/categorylist", $data);
       $this->load->view('admin/footer');
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
           $mdata['msg'] = 'Category Added Successfully ...';
        }else {
            $mdata['msg'] = "Category Not Added ...";
        }
        $url = BASE_URL."/AdminController/categoryList?msg".urlencode(serialize($mdata));
        header("Location:$url");
  
    }

    public function editCategory($id = NULL){
        $data = array();
        $table = 'categories';
        $CatModel = $this->load->model('CatModel');
        $data['catByid'] = $CatModel->catByid($table, $id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view("admin/editcat", $data);
        $this->load->view('admin/footer');
    }


    public function updateCat($id = NULL){
        $table = 'categories';
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
  
        $url = BASE_URL."/AdminController/categoryList?msg".urlencode(serialize($mdata));
        header("Location:$url");
  
    }

    public function deleteCategory($id = NULL){
        $table = 'categories';
        $cond = "id=$id";
        $CatModel = $this->load->model('CatModel');
        $result = $CatModel->delCatById($table, $cond);

        $mdata = array();
  
        if ($result == 1) {
           $mdata ['msg'] = 'Category Deleted Successfully ...';
        }else {
           $mdata ['msg'] = "Category Not Deleted ...";
        }
  
        $url = BASE_URL."/AdminController/categoryList?msg".urlencode(serialize($mdata));
        header("Location:$url");
    }

    public function addArticle(){
        $tableCat = 'categories';
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $CatModel = $this->load->model('CatModel');
        $data['catlist'] = $CatModel->catList($tableCat);

        $this->load->view('admin/addpost', $data);
        $this->load->view('admin/footer');

    }

    public function insertPost(){
        $tablePost = 'posts';
        
        $title = $_POST['title'];
        $content = $_POST['content'];
        $cat = $_POST['cat'];
  
        $data = array(
           'title' => $title,
           'content' => $content,
           'cat' => $cat
        );
        $PostModel = $this->load->model('PostModel');
        $result = $PostModel->insertpost($tablePost, $data);
  
        $mdata = array();
  
        if ($result == 1) {
           $mdata['msg'] = 'Article Added Successfully ...';
        }else {
            $mdata['msg'] = "Article Not Added ...";
        }
        $url = BASE_URL."/AdminController/articleList?msg".urlencode(serialize($mdata));
        header("Location:$url");
    }

    public function articleList(){
        $tableCat = 'categories';
        $tablePost = 'posts';

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $PostModel = $this->load->model('PostModel');
        $data['listPost'] = $PostModel->getPostList($tablePost);

        $CatModel = $this->load->model('CatModel');
        $data['catlist'] = $CatModel->catList($tableCat);

        $this->load->view('admin/postlist', $data);
        $this->load->view('admin/footer');

    }

    public function editArticle($id=NULL){
        $tableCat = 'categories';
        $tablePost = 'posts';

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $PostModel = $this->load->model('PostModel');
        $data['Postbyid'] = $PostModel->PostById($tablePost, $id);

        $CatModel = $this->load->model('CatModel');
        $data['catlist'] = $CatModel->catList($tableCat);

        $this->load->view('admin/editpost', $data);
        $this->load->view('admin/footer');


    }

    public function updatePost($id = NULL){
        $table = 'posts';
        $title = $_POST['title'];
        $content = $_POST['content'];
        $cat = $_POST['cat'];
  
        $cond = "id=$id";
        $data = array(
           'title' => $title,
           'content' => $content,
           'cat' => $cat
        );
        $PostModel = $this->load->model('PostModel');
        $result = $PostModel->postUpdate($table, $data, $cond);
  
        $mdata = array();
  
        if ($result == 1) {
           $mdata ['msg'] = 'Article Updated Successfully ...';
        }else {
           $mdata ['msg'] = "Article Not Updated ...";
        }
  
        $url = BASE_URL."/AdminController/articleList?msg".urlencode(serialize($mdata));
        header("Location:$url");
  
    }

    public function deleteArticle($id = NULL){
        $table = 'posts';
        $cond = "id=$id";
        $PostModel = $this->load->model('PostModel');
        $result = $PostModel->delPostById($table, $cond);

        $mdata = array();
  
        if ($result == 1) {
           $mdata ['msg'] = 'Post Deleted Successfully ...';
        }else {
           $mdata ['msg'] = "Post Not Deleted ...";
        }
  
        $url = BASE_URL."/AdminController/articleList?msg".urlencode(serialize($mdata));
        header("Location:$url");
    }

   
}
?>