<?php
    extract($_POST);
    require("../classes/contact.php");
    $image_location = $_FILES['image']['tmp_name'];
    $image_chemain  = $_FILES['image']['name'];
    $image_uplode   = Contact::LAST_ID().$image_chemain;
    $obj = new Contact($nom,$post,$image_uplode,$telephone,$whatsapp,$email);
    $success = $obj->ADD();
    move_uploaded_file($image_location,'../images/contact/'.$image_uplode);
    header("location:../template/vertical/main-rtl/ajoute_contact.php?success=$success");
?>