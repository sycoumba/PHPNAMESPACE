<?php
require_once "../config/autoload.php";
require_once ("../model/db.php");
require_once ("../model/Manager.php");
require_once ("../entites/Client.php");
require_once ("../entites/Client_salarie.php");
use entites\Client;
use entites\Client_salarie;

$manager = new Manager($db);

    extract($_POST);
    // Insertion des infos dans la table clients
    $client = new Client ();
$client->setadresse($adresse);
$client->settelephone($telephone);
$client->setemail($email);
$id_client = $manager->addClient($client);

//insertion des infos dans la table client Salarie
$client_salarie = new Client_salarie ();
$client_salarie->setNom($nom);
$client_salarie->setPrenom($prenom);
$client_salarie->setProfession($profession);
$client_salarie->setSalaire_actuel($salaire_actuel);
$client_salarie->setNom_entreprise($nom_entreprise);
$client_salarie->setAdresse_entreprise($adresse_entreprise);
$client_salarie->setIdentifiant_entreprise($identifiant_entreprise);
$client_salarie->setCni($cni);
$client_salarie->setId_client($id_client);

$manager->addClientSalarie($client_salarie);

?>