<?php

if($_SERVER["REQUEST_METHOD"]==='GET'){

    include "../accesseur/StatistiqueDAO.php";

    $statistiqueDAO = new StatistiqueDAO();

    $listeStats = $statistiqueDAO->lireTemperatureMode();

    header('Content-Type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';

    foreach($listeStats as $stats)
    {
    ?>
        <temperature>
            <mode><?=$stats->mode?></mode>
        </temperature>
    <?php
    }
}
else{
    die();
}
?>