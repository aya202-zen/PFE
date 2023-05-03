<?php
    extract($_POST);
    require("../classes/document.php");
    $pdf_location = $_FILES['pdf']['tmp_name'];
    $pdf_chemain  = $_FILES['pdf']['name'];
    $pdf_uplode   = Document::LAST_ID().$pdf_chemain;
    $obj = new Document($titre,$pdf_uplode);
    $success = $obj->ADD();
    move_uploaded_file($pdf_location,'../images/document/'.$pdf_uplode);
    header("location:../template/vertical/main-rtl/ajouter_document.php?success=".$success);
?>