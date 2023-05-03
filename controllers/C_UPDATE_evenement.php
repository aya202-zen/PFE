<?php
    require('../classes/evenement.php');
    extract($_POST);
    $image_location = $_FILES['image']['tmp_name'];
    $image_chemain  = $_FILES['image']['name'];
    $image_uplode   = $_GET['id'].$image_chemain;
    $video_location = $_FILES['video']['tmp_name'];
    $video_chemain  = $_FILES['video']['name'];
    $video_uplode   = $_GET['id'].$video_chemain;
    $etat_v = 0;
    $etat_y = 0;
    $etat_e = 0;
    if(isset($etat_video))         $etat_v = 1 ;
    if(isset($etat_video_youtube)) $etat_y = 1 ;
    if(isset($etat))               $etat_e = 1 ;
    if(strlen($image_location)>0 and strlen($video_location)>0){
        Evenement::UPDATE($_GET['id'],$titre,$date,$image_uplode,$video_uplode,$video_youtube,$description,$etat_v,$etat_y,$etat_e);
        move_uploaded_file($image_location,'../images/evenement/'.$image_uplode);
        move_uploaded_file($video_location,'../images/evenement/'.$video_uplode);
    }else{
        if(strlen($image_location)>0){
            Evenement::UPDATE($_GET['id'],$titre,$date,$image_uplode,Evenement::GET_VID_BY_ID($_GET['id']),$video_youtube,$description,$etat_v,$etat_y,$etat_e);
            move_uploaded_file($image_location,'../images/evenement/'.$image_uplode);
        }else{
            Evenement::UPDATE($_GET['id'],$titre,$date,Evenement::GET_IMG_BY_ID($_GET['id']),$video_uplode,$video_youtube,$description,$etat_v,$etat_y,$etat_e);
            move_uploaded_file($video_location,'../images/evenement/'.$video_uplode);
        }
    }
    header('location:../template/vertical/main-rtl/afficher_evenement.php');
?>