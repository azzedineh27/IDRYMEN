<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Model {
    private $bd;
    
    private static $instance = null;
    
    private function __construct() {
        include "Utils/credentials.php";
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET NAMES 'utf8'");
    }

    public static function getModel() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function ajouterFavori($utilisateurId, $planteId) {
        // Vérifier si la plante est déjà en favoris
        $check = $this->bd->prepare("SELECT * FROM favoris WHERE utilisateur_id = :utilisateur_id AND plante_id = :plante_id");
        $check->bindParam(':utilisateur_id', $utilisateurId);
        $check->bindParam(':plante_id', $planteId);
        $check->execute();
        if ($check->fetch()) {
            return 'deja_en_favoris';
        }

        // Ajouter la plante aux favoris
        $req = $this->bd->prepare("INSERT INTO favoris (utilisateur_id, plante_id) VALUES (:utilisateur_id, :plante_id)");
        $req->bindParam(':utilisateur_id', $utilisateurId);
        $req->bindParam(':plante_id', $planteId);
        if ($req->execute()) {
            return 'ajout_succes';
        } else {
            return 'erreur_ajout';
        }
    }

    public function estEnFavoris($utilisateurId, $planteId) {
        $query = $this->bd->prepare("SELECT COUNT(*) FROM favoris WHERE utilisateur_id = :utilisateur_id AND plante_id = :plante_id");
        $query->execute(['utilisateur_id' => $utilisateurId, 'plante_id' => $planteId]);
        $count = $query->fetchColumn();
        return $count > 0;
    }

    public function supprimerFavori($utilisateurId, $planteId) {
        $req = $this->bd->prepare("DELETE FROM favoris WHERE utilisateur_id = :utilisateur_id AND plante_id = :plante_id");
        $req->bindParam(':utilisateur_id', $utilisateurId);
        $req->bindParam(':plante_id', $planteId);
        return $req->execute();
    }

    public function getFavorisUtilisateur($utilisateurId) {
        $req = $this->bd->prepare("SELECT p.* FROM plantes p JOIN favoris f ON p.id = f.plante_id WHERE f.utilisateur_id = :utilisateur_id");
        $req->bindParam(':utilisateur_id', $utilisateurId);
        $req->execute();
        return $req->fetchAll();
    }
}
?>
