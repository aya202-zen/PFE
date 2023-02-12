<?php
    class DAO {
        public function Connexion_DB(){
            return new PDO("mysql:host=localhost;dbname=pfe_test","root","");
        }
        //***********  LOGIN  *****************************/
        public function login($u,$p,$t){
            $db = $this->Connexion_DB();
            switch ($t) {
                case 'Admin':
                    $select = $db->prepare("select * from admin where username = ? and password = ? ");
                    $select->execute(array($u,$p));
                    return $select->fetch(); break;
                case 'Directeur':
                    $select = $db->prepare("select * from directeur where username = ? and password = ? ");
                    $select->execute(array($u,$p));
                    return $select->fetch(); break;
                default : 
                    return null;
            }
        }
    }
?>