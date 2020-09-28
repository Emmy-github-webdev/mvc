<?php
/* Load Class */
class Load{

    public function __construct(){
        
    }

    public function view($fileName, $data = false){
        if($data == true){
            extract($data);
        }
        include 'app/views/'.$fileName.'.php';

    }

    public function model($modelName){
        include 'app/models/'.$modelName.'.php';
        return new $modelName();

    }
}
?>