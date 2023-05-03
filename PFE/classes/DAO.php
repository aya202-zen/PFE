<?php
    class DAO {
        public function Connexion_DB(){
            return new PDO("mysql:host=localhost;dbname=PFE_DB","root","");
        }
        /***********************  EVENEMENT ***************************/
        public function ajoute_evenement($t,$d,$i,$v,$y,$de,$id_e){
            $db = $this->Connexion_DB();
            $insert = $db->prepare("insert into evenement (titre_evenement,date_evenement,image_evenement,video_evenement,video_youtube_evenement,description_evenement) values (?,?,?,?,?,?)");
            $success =$insert->execute(array($t,$d,$i,$v,$y,$de));
            $link   = $db->prepare("insert into assoc_evenement values (?,?)");
            $link->execute(array($id_e,$db->lastInsertId()));
            return $success;
        }
        public function affiche_evenement($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (evenement NATURAL JOIN assoc_evenement) WHERE id_etablissement_ = ?");
            $select->execute(array($id_e));
            return $select;
        }
        public function supprimer_evenement($id,$id_e){
            $db = $this->Connexion_DB();
            $link   = $db->prepare("DELETE FROM assoc_evenement where id_etablissement_ = ? and id_evenement= ?");
            $link->execute(array($id_e,$id));
            $delete = $db->prepare("delete from evenement where id_evenement = ? ");
            $delete->execute(array($id));
        }
        public function modifier_evenement($id,$t,$d,$i,$v,$y,$de,$ev,$ey,$e){
            $db = $this->Connexion_DB();
            $update = $db->prepare("update evenement set titre_evenement= ? ,date_evenement = ? ,image_evenement = ?,video_evenement = ?,video_youtube_evenement = ?,description_evenement = ? , etat_video=?,etat_video_youtube=?,etat_evenement=? where id_evenement = ?");
            $update->execute(array($t,$d,$i,$v,$y,$de,$ev,$ey,$e,$id));
        }
        public function recuperer_image_evenement($id){
            $db = $this->Connexion_DB();
            $image = $db->prepare("select image_evenement from evenement where id_evenement= ?");
            $image->execute(array($id));
            return $image->fetch()[0];
        }
        public function recuperer_video_evenement($id){
            $db = $this->Connexion_DB();
            $video = $db->prepare("select video_evenement from evenement where id_evenement= ?");
            $video->execute(array($id));
            return $video->fetch()[0];
        }
        public function last_id_evenement(){
            $db = $this->Connexion_DB();
            $id = $db->prepare("select max(id_evenement) from evenement");
            $id->execute(array());
            return $id->fetch()[0];
        }
        /*************************  CONTACT  ***********************************/
        public function ajoute_contact($n,$p,$i,$t,$w,$e,$id_e){
            $db = $this->Connexion_DB();
            $insert = $db->prepare("insert into contact (nom_contact,profession_contact,image_contact,telephone_contact,whatsapp_contact,email_contact) values (?,?,?,?,?,?)");
            $success = $insert->execute(array($n,$p,$i,$t,$w,$e));
            $link   = $db->prepare("insert into assoc_contact values (?,?)");
            $link->execute(array($db->lastInsertId(),$id_e));
            return $success;
        }
        public function affiche_contact($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (contact NATURAL JOIN assoc_contact) WHERE id_etablissement_ = ?");
            $select->execute(array($id_e));
            return $select;
        }
        public function supprimer_contact($id,$id_e){
            $db = $this->Connexion_DB();
            $link   = $db->prepare("DELETE FROM assoc_contact where id_etablissement_ = ? and id_contact= ?");
            $link->execute(array($id_e,$id));
            $delete = $db->prepare("delete from contact where id_contact = ? ");
            $delete->execute(array($id));
        }
        public function modifier_contact($id,$n,$p,$i,$t,$w,$e,$et,$ew,$ee,$ec){
            $db = $this->Connexion_DB();
            $update = $db->prepare("update contact set nom_contact= ?,profession_contact = ?,image_contact=?,telephone_contact = ?,whatsapp_contact=?,email_contact=? , etat_telephone = ? , etat_whatsapp = ? , etat_email=?, etat_contact = ?  where id_contact = ?");
            $update->execute(array($n,$p,$i,$t,$w,$e,$et,$ew,$ee,$ec,$id));
        }
        public function recuperer_image_contact($id){
            $db = $this->Connexion_DB();
            $image = $db->prepare("select image_contact from contact where id_contact= ?");
            $image->execute(array($id));
            return $image->fetch()[0];
        }
        public function last_id_contact(){
            $db = $this->Connexion_DB();
            $id = $db->prepare("select max(id_contact) from contact");
            $id->execute(array());
            return $id->fetch()[0];
        }
        /*************************  DOCUMENT    ***********************************/
        public function ajoute_document($t,$p,$id_e){
            $db      = $this->Connexion_DB();
            $insert  = $db->prepare("insert into document (titre_document,pdf_document) values (?,?)");
            $success = $insert->execute(array($t,$p));
            $link    = $db->prepare("insert into assoc_document values (?,?)");
            $link->execute(array($id_e,$db->lastInsertId()));
            return $success;
        }
        public function affiche_document($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (document NATURAL JOIN assoc_document) WHERE id_etablissement_ = ?");
            $select->execute(array($id_e));
            return $select;
        }
        public function supprimer_document($id,$id_e){
            $db = $this->Connexion_DB();
            $link   = $db->prepare("DELETE FROM assoc_document where id_etablissement_ = ? and id_document= ?");
            $link->execute(array($id_e,$id));
            $delete = $db->prepare("delete from document where id_document = ? ");
            $delete->execute(array($id));
        }
        public function modifier_document($id,$t,$p,$e){
            $db = $this->Connexion_DB();
            $update = $db->prepare("update document set titre_document = ? , pdf_document=? , etat_document = ? where id_document = ?");
            $update->execute(array($t,$p,$e,$id));
        }
        public function recuperer_pdf_document($id){
            $db = $this->Connexion_DB();
            $image = $db->prepare("select pdf_document from document where id_document= ?");
            $image->execute(array($id));
            return $image->fetch()[0];
        }
        public function last_id_document(){
            $db = $this->Connexion_DB();
            $id = $db->prepare("select max(id_document) from document");
            $id->execute(array());
            return $id->fetch()[0];
        }
        /*************************  PAGE    ***********************************/
        public function afficher_etablissement_id($id){
            $db = $this->Connexion_DB();
            $select = $db->prepare('select name_ from association where id_etablissement_ = ?');
            $select->execute(array($id));
            return $select;
        }
        public function ajoute_demande($id_e,$titeur,	$cin_t,	$date_expr_cin_t,	$adresse_t,	$nom_enfant_p,	$nom_enfant_m,	$proche_1,	$proche_2,	$nom_enfant,	$statut_social	,$distance_ecole,	$pas_pere,	$pas_mere,	$pas_p_m,	$pere_inconnu,	$parent_inconnu,	$exploiter_1,	$exploiter_2,	$violence,	$moyenne,	$date	,$fait_au , $pdf_situation_sociale,$pdf_note_scolaire){
            $db = $this->Connexion_DB();
            $insert = $db->prepare("insert into demande (titeur,cin_t,date_expr_cin_t,adresse_t,nom_enfant_p,nom_enfant_m,proche_1,proche_2,nom_enfant,statut_social,distance_ecole,pas_pere,pas_mere,pas_p_m,pere_inconnu,parent_inconnu,exploiter_1,exploiter_2,violence,moyenne,date,fait_au,pdf_situation_sociale,pdf_note_scolaire) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $insert->execute(array($titeur,$cin_t,$date_expr_cin_t,$adresse_t,$nom_enfant_p,$nom_enfant_m,$proche_1,$proche_2,$nom_enfant,$statut_social,$distance_ecole,$pas_pere,$pas_mere,$pas_p_m,$pere_inconnu,$parent_inconnu,$exploiter_1,$exploiter_2,$violence,$moyenne,$date,$fait_au,$pdf_situation_sociale,$pdf_note_scolaire));
            $link    = $db->prepare("insert into assoc_demande values (?,?)");
            $link->execute(array($db->lastInsertId(),$id_e));
        }
        public function etat_demande($id){
            $db = $this->Connexion_DB();
            $select = $db->prepare('select accepte from demande where id_demande = ?');
            $select->execute(array($id));
            return $select;
        }
        public function afficher_liste_demande($id){
            $db = $this->Connexion_DB();
            $select = $db->prepare('SELECT * from (demande NATURAL JOIN assoc_demande) WHERE id_etablissement_ = ?');
            $select->execute(array($id));
            return $select;
        }
        public function last_id_demande(){
            $db = $this->Connexion_DB();
            $id = $db->prepare("select max(id_demande) from demande");
            $id->execute(array());
            return $id->fetch()[0];
        }
        public function ajoute_message($t,$e,$c,$n){
            $db = $this->Connexion_DB();
            $insert = $db->prepare("insert into message (telephone_message,email_message,commentaire,nom_message) values (?,?,?,?)");
            $insert->execute(array($t,$e,$c,$n));
        }
        public function afficher_liste_contact($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (contact NATURAL JOIN assoc_contact) WHERE id_etablissement_ = ? and etat_contact = 1");
            $select->execute(array($id_e));
            return $select;
        }
        public function afficher_liste_evenement($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (evenement NATURAL JOIN assoc_evenement) WHERE id_etablissement_ = ? and etat_evenement = 1");
            $select->execute(array($id_e));
            return $select;
        }
        public function recuperer_evenement($id){
            $db = $this->Connexion_DB();
            $select = $db->prepare("select * from evenement where id_evenement=?");
            $select->execute(array($id));
            return $select;
        }
        public function afficher_liste_document($id_e){
            $db = $this->Connexion_DB();
            $select = $db->prepare("SELECT * from (document NATURAL JOIN assoc_document) WHERE id_etablissement_ = ? and etat_document = 1");
            $select->execute(array($id_e));
            return $select;
        }
        /*************************  LOGIN    ***********************************/
        public function connexion($u){
            $db = $this->Connexion_DB();
            $select = $db->prepare("select * from admin where username = ?");
            $select->execute(array($u));
            return $select;
        }
        public function afficher_compte(){
            $db = $this->Connexion_DB();
            $select = $db->prepare("select * from admin ");
            $select->execute();
            return $select;
        }
        public function modifier_mot_de_passe($u,$p){
            $db = $this->Connexion_DB();
            $update = $db->prepare("update admin set username = ? , password = ? ");
            $update->execute(array($u,$p));
        }
    }
?>