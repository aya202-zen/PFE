<?php
    require('../classes/page.php');
    extract($_POST);
    $password_hash = password_hash($password,PASSWORD_DEFAULT);
    Page::UPDATE_ACCOUNT($username,$password_hash);
    header('location:../template/vertical/main-rtl/gestion_login.php');
?>