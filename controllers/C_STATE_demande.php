<?php
    require('../classes/page.php');
    extract($_GET);
    $data = Page::STATE_DEMANDE($_GET['id_demande']);
    json_decode($data->fetch());
?>