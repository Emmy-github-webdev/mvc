<?php
/* Main Model */
class Dmodel{
    protected $db = array();

    public function __construct(){
        $dsn = 'mysql:dbname=heroku_6f41314fddd5f43; host=eu-cdbr-west-03.cleardb.net';
        $user = ba6f03cc365b9a;
        $pass = bce3f230;
        $this->db = new Database($dsn, $user, $pass);
       
    }
}
?>