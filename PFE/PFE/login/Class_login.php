<?php 
    require_once("../DAO.php");
    class Login{
        private $username;
        private $password;
        private $type;
        public function __construct($u,$p,$t){
            $this->username = $u;
            $this->password = $p;
            $this->type     = $t;
        }
        public function Authentification(){
            $db = new DAO();
            return $db->login($this->username,$this->password,$this->type);
        }
    }
?>