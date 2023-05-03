<?php
    require("DAO.php");
    class Page{
        public function AUTH($u){
            $db = new DAO();
            return $db->connexion($u);
        }
        static function ALL_CONTACT(){
            $db = new DAO();
            return $db->afficher_liste_contact(1);
        }
        static function ALL_EVENEMENT(){
            $db = new DAO();
            return $db->afficher_liste_evenement(1);
        }
        static function ALL_DOCUMENT(){
            $db = new DAO();
            return $db->afficher_liste_document(1);
        }
        static function GET_EVENT_BY_ID($id){
            $db = new DAO();
            return $db->recuperer_evenement($id)->fetch();
        }
        static function ADD_DEMANDE($id_e,$titeur,$cin_t,$date_expr_cin_t,$adresse_t,$nom_enfant_p,$nom_enfant_m,$proche_1,$proche_2,$nom_enfant,$statut_social,$distance_ecole,$pas_pere,$pas_mere,$pas_p_m,$pere_inconnu,$parent_inconnu,$exploiter_1,$exploiter_2,$violence,$moyenne,$date,$fait_au,$pdf_situation_sociale,$pdf_note_scolaire	){
            $db = new DAO();
            $db->ajoute_demande($id_e,$titeur,$cin_t,$date_expr_cin_t,$adresse_t,$nom_enfant_p,$nom_enfant_m,$proche_1,$proche_2,$nom_enfant,$statut_social,$distance_ecole,$pas_pere,$pas_mere,$pas_p_m,$pere_inconnu,$parent_inconnu,$exploiter_1,$exploiter_2,$violence,$moyenne,$date,$fait_au,$pdf_situation_sociale,$pdf_note_scolaire	);
        }
        static function SHOW_DEMANDE($id){
            $db = new DAO();
            return $db->afficher_liste_demande($id);
        }
        static function GET_NAME_ASSOC_BY_ID($id){
            $db = new DAO();
            return $db->afficher_etablissement_id($id);
        }
        static function ADD_MSG($t,$e,$c,$n){
            $db = new DAO();
            $db->ajoute_message($t,$e,$c,$n);
        }
        static function GET_LAST_ID_DEMANDE(){
            $db = new DAO();
            return $db->last_id_demande();
        }
        static function STATE_DEMANDE($id){
            $db = new DAO();
            return $db->etat_demande($id);
        }
        static function SHOW_ACCOUNT(){
            $db = new DAO();
            return $db->afficher_compte();
        }
        static function UPDATE_ACCOUNT($u,$p){
            $db = new DAO();
            $db->modifier_mot_de_passe($u,$p);
        }

    }
?>