<?php
    require('../classes/contact.php');
    extract($_POST);
    $image_location = $_FILES['image']['tmp_name'];
    $image_chemain  = $_FILES['image']['name'];
    $image_uplode   = $_GET['id'].$image_chemain;
    $etat_t = 0;
    $etat_w = 0;
    $etat_e = 0;
    $etat_c = 0;
    if(isset($etat_telephone)) $etat_t = 1 ;
    if(isset($etat_whatsapp))  $etat_w = 1 ;
    if(isset($etat_email))     $etat_e = 1 ;
    if(isset($etat_contact))   $etat_c = 1 ;
    if(strlen($image_location)>0){
        Contact::UPDATE($_GET['id'],$nom,$poste,$image_uplode,$telephone,$whatsapp,$email,$etat_t,$etat_w,$etat_e,$etat_c);
        move_uploaded_file($image_location,'../images/contact/'.$image_uplode);
    }else{
        Contact::UPDATE($_GET['id'],$nom,$poste,Contact::GET_IMG_BY_ID($_GET['id']),$telephone,$whatsapp,$email,$etat_t,$etat_w,$etat_e,$etat_c);
        move_uploaded_file($image_location,'../images/contact/'.$image_uplode);
    }
    header('location:../template/vertical/main-rtl/afficher_contact.php');
?>