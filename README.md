# OC_P3_webservices
webservice du P3 OC

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
    $reponse = $bdd -> query('select id, nom from t_lecon');
    $output = $reponse -> fetchAll(PDO::FETCH_ASSOC);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
    echo (json_encode($output));
