<?php
    extract($_POST);
    require("Class_login.php");
    $db = new Login($username,$pass,$type);
    if($db->Authentification()){
        switch ($type) {
            case 'Admin' :
                header('location:../admin/admin.php');break;
            case 'Directeur' :
                header('location:../director/director.php');break;
            default : header('location:login.php');
        }
    }else{
        header('location:login.php');
    }
?>