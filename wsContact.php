<?php
$nom = $_GET["nom"];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','');
    $reponse = $bdd -> query("select r.nom, r.prenom, r.email from t_responsable r, t_utilisateur u where u.identifiant = '$nom' and u.id_responsable = r.id");

    $output = $reponse -> fetchAll(PDO::FETCH_ASSOC);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
echo (json_encode($output));