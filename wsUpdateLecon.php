<?php

$nom = $_GET["nom"];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
    $reponse = $bdd -> query("UPDATE t_utilisateur SET id_cours = id_cours + 1 where identifiant='$nom' ");

    $output = $reponse -> fetchAll(PDO::FETCH_ASSOC);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
echo (json_encode($output));