<?php
declare(strict_types=1);
namespace WebCom;
use PDO;
use Symfony\Component\Dotenv\Dotenv;

require_once('vendor/autoload.php');
$dotenv = new Dotenv();
$dotenv->load('.env');


class Connexion{
  
    protected $db;
  
    public function __construct(){
    
        try{
            $requete = sprintf("mysql:host=%s;dbname=%s",$_ENV["DB_HOST"],$_ENV["DB_NAME"]);
            $db = new PDO($requete,$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"]), array(PDO::MYSQL_ATTR_LOCAL_INFILE=>true));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Erreur de connexion : " + $e->getMessage();
        }
        return $db;
    }

}
?>