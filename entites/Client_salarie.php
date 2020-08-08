<?php
namespace entites;
    class Client_salarie 
{
    private $prenom;
    private $profession;
    private $salaire_actuel;
    private $nom_entreprise;
    private $adresse_entreprise;
    private $identifiant_entreprise;
    private $nom;
    private $cni;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // parent::__construct();  
    }
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }

    public function setPrenom($prenom)
    {
       $this->prenom = $prenom;
    }
    public function setProfession($profession)
    {
       $this->profession = $profession;
    }
    public function setSalaire_actuel($salaire_actuel)
    {
       $this->salaire_actuel = $salaire_actuel;
    }
    public function setNom_entreprise($nom_entreprise)
    {
       $this->nom_entreprise = $nom_entreprise;
    }
    public function setAdresse_entreprise($adresse_entreprise)
    {
       $this->adresse_entreprise = $adresse_entreprise;
    }
    public function setIdentifiant_entreprise($identifiant_entreprise)
    {
       $this->identifiant_entreprise = $identifiant_entreprise;
    }
    public function setNom($nom)
    {
       $this->nom = $nom;
    }
    public function setCni($cni)
    {
       $this->cni = $cni;
    }
    // getters
    public function getId_client()
    {
        return $this->id_client;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getProfession()
    {
        return $this->profession;
    }
    public function getSalaire_actuel()
    {
        return $this->salaire_actuel;
    }
    public function getNom_entreprise()
    {
        return $this->nom_entreprise;
    }
    public function getAdresse_entreprise()
    {
        return $this->adresse_entreprise;
    }
    public function getIdentifiant_entreprise()
    {
        return $this->identifiant_entreprise;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    public function getCni()
    {
        return $this->cni;
    }
}
