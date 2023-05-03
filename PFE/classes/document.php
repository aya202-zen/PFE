<?php
    require ("DAO.php");
    class Document{
        private $titre;
        private $pdf;
        function __construct($t,$p){
            $this->titre         = $t; 
            $this->pdf           = $p;
        }
        public function ADD(){
            $db = new DAO();
            return $db->ajoute_document($this->titre,$this->pdf,1);
        }
        static function SHOW(){
            $db = new DAO();
            return $db->affiche_document(1);
        }
        static function DELETE($id){
            $db = new DAO();
            $db->supprimer_document($id,1);
        }
        static function UPDATE($id,$t,$p,$e){
            $db = new DAO();
            $db->modifier_document($id,$t,$p,$e);
        }
        static function GET_PDF_BY_ID($id){
            $db = new DAO();
            return $db->recuperer_pdf_document($id);
        }
        static function LAST_ID(){
            $db = new DAO();
            $id = $db->last_id_document();
            return $id;
        }
    }
?>