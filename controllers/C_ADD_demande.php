<?php
    require('../classes/page.php');
    extract($_POST);
    $pdf_as_location = $_FILES['pdf_as']['tmp_name'];
    $pdf_as_chemain  = $_FILES['pdf_as']['name'];
    $pdf_situation_sociale   = (Page::GET_LAST_ID_DEMANDE()+1).'_situation_social_'.$pdf_as_chemain;
    $pdf_bs_location = $_FILES['pdf_bs']['tmp_name'];
    $pdf_bs_chemain  = $_FILES['pdf_bs']['name'];
    $pdf_note_scolaire	   =(Page::GET_LAST_ID_DEMANDE()+1).'_note_scolaire_'.$pdf_bs_chemain	;
    $violence_t     = 0;
    $pas_de_pere    = 0;
    $pas_de_mere    = 0;
    $pas_de_parent  = 0;
    $inconnu_pere   = 0;
    $inconnu_parent = 0;
    if(isset($violence))            $violence_t     = 1;
    if($orphelin=="orphelin_p")     $pas_de_pere    = 1;
    elseif($orphelin=="orphelin_m") $pas_de_mere    = 1;
    else                            $pas_de_parent  = 1;
    if($inconnu == "inconnu_p")     $inconnu_pere   = 1;
    else                            $inconnu_parent = 1;
    $obj = new Page();
    $obj->ADD_DEMANDE(2,$titeur,$cin_t,$date_expr_cin_t,$adresse_t,$nom_enfant_p,$nom_enfant_m,$proche_1,$proche_2,$nom_enfant,$statut_social,$distance_ecole,$pas_de_pere,$pas_de_mere,$pas_de_parent,$inconnu_pere,$inconnu_parent,$exploiter_1,$exploiter_2,$violence_t,$moyenne,$date,$fait_au,$pdf_situation_sociale,$pdf_note_scolaire);
    move_uploaded_file($pdf_as_location,'../images/piece_a_joindre/'.$pdf_situation_sociale);
    move_uploaded_file($pdf_bs_location	,'../images/piece_a_joindre/'.$pdf_note_scolaire);
    header('location:../front-end/rtl/index_demande.php');
?>