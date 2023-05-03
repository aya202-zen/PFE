<?php
    require('../classes/evenement.php');
    try {
        unlink("../images/evenement/".Evenement::GET_IMG_BY_ID($_GET['id']));
        unlink("../images/evenement/".Evenement::GET_VID_BY_ID($_GET['id']));
    } catch (\Throwable $th) {/*throw $th;*/}
    Evenement::DELETE($_GET['id']);
    header('location:../template/vertical/main-rtl/afficher_evenement.php');
?>