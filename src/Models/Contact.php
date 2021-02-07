<?php
declare(strict_types=1);
namespace WebCom\Models;

class Contact {
    private $db;
    private $nomTable = "contact";

    // Déclaration des éléments dans notre table
    public $refContact;
    public $nom;
    public $prenom;
    public $adresse;
    public $ville;
    public $codePostal;

    public function __construct($db) {
        $this->$db = $db;
    }

    function lecture(){
    
        $requete = sprintf("SELECT * FROM %s", $nomTable);
        $data = $db->prepare($requete);
        $data->execute();
        
        if($data){
            return $data;
        }
        else{
            return null;
        }
    }

    function rechercheContact(String $motRecherche) {
        $requete = sprintf("SELECT * FROM %s WHERE refContact LIKE %t OR nom LIKE %t OR prenom LIKE %t OR adresse LIKE %t OR ville LIE %t OR cordePostal LIKE %t",$nomTable,$motRecherche);
        $data = $db->prepare($requete);
        $data->execute();
        
        if($data){
            return $data;
        }
        else{
            return null;
        }
    }

}