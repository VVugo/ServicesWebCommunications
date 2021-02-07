<?php
declare(strict_types=1);
namespace WebCom\Controllers;

use PDO;
use WebCom\Connexion;
use WebCom\Models\Contact;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new Connexion();
$contact = new Contact($db);
$mot=isset($_GET["recherche"]) ? $_GET["recherche"] : "";

if($mot) {
    $data = $contact->rechercheContact($mot);
}
else {
    $data = $contact->lecture();
}
$num = $stmt->rowCount();
  
if($num > 0) {
  
    $tableauContacts=array();
    $tableauContacts["contacts"]=array();
  
    while ($row = $data->fetch(PDO::FETCH_ASSOC)){
        extract($row);
  
        $unContact=array(
            "refContact" => $refContact,
            "nom" => $nom,
            "prenom" => $prenom,
            "adresse" => html_entity_decode($adresse),
            "ville" => $ville,
            "codePostal" => $codePostal
        );
  
        array_push($tableauContacts["contacts"], $unContact);
    }
  
    http_response_code(200);
  
    echo json_encode($tableauContacts);
}
else{
    http_response_code(404);
    echo json_encode(
        array("message" => "Aucun contact n'a été trouvé.")
    );
}