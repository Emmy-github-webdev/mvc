<?php
/* Main Controller */
class Dcontroller{
    protected $load = array();

    public function __construct(){
       $this->load = new Load();
    }
}
?>