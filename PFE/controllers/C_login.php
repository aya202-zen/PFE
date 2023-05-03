<?php
    extract($_POST);
    require("../classes/page.php");
    if(Page::AUTH($username)->fetch()){
        if(password_verify($pass,Page::AUTH($username)->fetch()['password'])) echo 'yes';
        else echo 'NON';
    }
?>