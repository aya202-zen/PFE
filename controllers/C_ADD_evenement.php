<?php
    extract($_POST);
    require("../classes/evenement.php");
    $image_location = $_FILES['image']['tmp_name'];
    $image_chemain  = $_FILES['image']['name'];
    $image_uplode   = Evenement::LAST_ID().$image_chemain;
    $video_location = $_FILES['video']['tmp_name'];
    $video_chemain  = $_FILES['video']['name'];
    $video_uplode   = Evenement::LAST_ID().$video_chemain;
    $obj = new Evenement($titre,$date,$image_uplode,$video_uplode,$video_youtube,$description);
    $success = $obj->ADD();
    move_uploaded_file($image_location,'../images/evenement/'.$image_uplode);
    move_uploaded_file($video_location,'../images/evenement/'.$video_uplode);
    header("location:../template/vertical/main-rtl/ajouter_evenement.php?success=$success");
?>