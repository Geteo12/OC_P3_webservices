<?php
$nom = $_GET["nom"];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
    $reponse = $bdd -> query("select t_lecon.nom, t_lecon.lecon, t_utilisateur.date, t_utilisateur.date_suivante from t_lecon, t_utilisateur where t_utilisateur.id_cours = t_lecon.id and 
                                t_utilisateur.identifiant = '".$nom."'");
    $output = $reponse -> fetchAll(PDO::FETCH_ASSOC);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
    echo (json_encode($output));