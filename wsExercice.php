<?php
$nom = $_GET["nom"];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
    $reponse = $bdd -> query("select e.exercice, e.reponse from t_exercice e, t_utilisateur u, t_lecon l
                            where u.identifiant='$nom' and u.id_cours = l.id and e.id_lecon between 1 and u.id_cours 
                            order by ROUND( RAND() * u.id_cours) + 1 LIMIT 1 OFFSET 1");

    $output = $reponse -> fetchAll(PDO::FETCH_ASSOC);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
    echo (json_encode($output));