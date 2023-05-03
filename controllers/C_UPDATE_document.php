<?php
    require('../classes/document.php');
    extract($_POST);
    $pdf_location = $_FILES['pdf']['tmp_name'];
    $pdf_chemain  = $_FILES['pdf']['name'];
    $pdf_uplode   = $_GET['id'].$pdf_chemain;
    $etat_d = 0;
    if(isset($etat_document))    $etat_d = 1 ;
    if(strlen($pdf_location)>0){
        Document::UPDATE($_GET['id'],$titre,$pdf_uplode,$etat_d);
        move_uploaded_file($pdf_location,'../images/document/'.$pdf_uplode);
    }else{
        Document::UPDATE($_GET['id'],$titre,Document::GET_PDF_BY_ID($_GET['id']),$etat_d);
        move_uploaded_file($pdf_location,'../images/document/'.$pdf_uplode);
    }
    header('location:../template/vertical/main-rtl/afficher_document.php');
?>