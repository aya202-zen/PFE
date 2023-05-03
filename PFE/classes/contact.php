<?php
    require ("DAO.php");
    class Contact{
        private $nom;
        private $profession;
        private $image;
        private $telephone;
        private $whatsapp;
        private $email;
        function __construct($n,$p,$i,$t,$w,$e){
            $this->nom        = $n; 
            $this->profession = $p;
            $this->image      = $i;
            $this->telephone  = $t;
            $this->whatsapp   = $w;
            $this->email      = $e;
        }
        public function ADD(){
            $db = new DAO();
            return $db->ajoute_contact($this->nom,$this->profession,$this->image,$this->telephone,$this->whatsapp,$this->email,1);
        }
        static function SHOW(){
            $db = new DAO();
            return $db->affiche_contact(1);
        }
        static function DELETE($id){
            $db = new DAO();
            $db->supprimer_contact($id,1);
        }
        static function UPDATE($id,$n,$p,$i,$t,$w,$e,$et,$ew,$ee,$ec){
            $db = new DAO();
            $db->modifier_contact($id,$n,$p,$i,$t,$w,$e,$et,$ew,$ee,$ec);
        }
        static function GET_IMG_BY_ID($id){
            $db = new DAO();
            return $db->recuperer_image_contact($id);
        }
        static function LAST_ID(){
            $db = new DAO();
            $id = $db->last_id_contact();
            return $id;
        }
    }
?>