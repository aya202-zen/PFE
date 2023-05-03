<?php
    require('../classes/contact.php');
    unlink("../images/contact/".Contact::GET_IMG_BY_ID($_GET['id']));
    Contact::DELETE($_GET['id']);
    header('location:../template/vertical/main-rtl/afficher_contact.php');
?>