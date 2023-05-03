<?php
    require ("DAO.php");
    class Evenement{
        private $titre;
        private $date;
        private $image;
        private $video;
        private $video_youtube;
        private $description;
        function __construct($t,$d,$i,$v,$y,$de){
            $this->titre         = $t; 
            $this->date          = $d;
            $this->image         = $i;
            $this->video         = $v;
            $this->video_youtube = $y;
            $this->description   = $de;
        }
        public function ADD(){
            $db = new DAO();
            return $db->ajoute_evenement($this->titre,$this->date,$this->image,$this->video,$this->video_youtube,$this->description,1);
        }
        static function SHOW(){
            $db = new DAO();
            return $db->affiche_evenement(1);
        }
        static function DELETE($id){
            $db = new DAO();
            $db->supprimer_evenement($id,1);
        }
        static function UPDATE($id,$t,$d,$i,$v,$y,$de,$ev,$ey,$e){
            $db = new DAO();
            $db->modifier_evenement($id,$t,$d,$i,$v,$y,$de,$ev,$ey,$e);
        }
        static function GET_IMG_BY_ID($id){
            $db = new DAO();
            return $db->recuperer_image_evenement($id);
        }
        static function GET_VID_BY_ID($id){
            $db = new DAO();
            return $db->recuperer_video_evenement($id);
        }
        static function LAST_ID(){
            $db = new DAO();
            $id = $db->last_id_evenement();
            return $id;
        }
    }
?>