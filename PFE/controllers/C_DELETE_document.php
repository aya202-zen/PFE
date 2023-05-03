<?php
    require('../classes/document.php');
    unlink("../images/document/".Document::GET_PDF_BY_ID($_GET['id']));
    Document::DELETE($_GET['id']);
    header('location:../template/vertical/main-rtl/afficher_document.php');
?>