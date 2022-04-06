<?php

//importer la connexion à la bdd
    include './utils/connectBdd.php';
    //importer le model
    include './model/model_user.php';
    //importer la vue (interface)
    include './view/view_show_all_user.php';

    showAllUser();
?> 