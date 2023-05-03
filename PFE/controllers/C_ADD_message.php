<?php
    require('../classes/page.php');
    extract($_POST);
    Page::ADD_MSG($telephone,$email,$description,$nom);
    header('location:../front-end/rtl/index_contact.php');
?>