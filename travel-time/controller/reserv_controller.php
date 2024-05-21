<meta charset="UTF-8">
<?php

require_once '../model/reserv_model.php';
require_once '../config/config.php';
class reservController
{
    private $connexion;

    public function __construct()
    {
        $conn = new Config();
        $this->connexion = $conn->getConnexion();
    }

    public function createReserv($cin, $nbprsn, $place,$date)
    {
        return new reserv_model($cin, $nbprsn, $place,$date);
    }
    public function getReserv()
    {
        try {
            // Préparer une requête SQL pour sélectionner tous les utilisateurs
            $req = "SELECT * FROM reserve";
            $res = $this->connexion->prepare($req);
            $res->execute();

            // Récupérer tous les résultats dans un tableau associatif
            $users = $res->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $e) {
            // Gérer les erreurs en affichant un message
            echo "Erreur lors de la récupération des utilisateurs: " . $e->getMessage();
            return [];
        }
    }
    public function getReservById($id)
    {
        $users = $this->getReserv();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userModel = new UserModel($user['cin'], $user['nbprsn'], $user['place'], $user['date']);
                return $userModel;
            }
        }
        echo "<p class='error'>Aucun utilisateur trouvé avec l'ID " . $id . "</p>";
    }
    public function addReserv($reserv)
    {
        try {
            // Préparez la requête SQL avec des marqueurs de paramètre
            $req = "INSERT INTO `reserve` (`cin`, `nbprsn`, `place`, `date`) 
                VALUES (:cin, :nbprsn, :place, :date)";
            $res = $this->connexion->prepare($req);

            // Liaison des valeurs avec bindValue
            $res->bindValue(':cin', $reserv->getcin());
            $res->bindValue(':nbprsn', $reserv->getnbprsn());
            $res->bindValue(':place', $reserv->getplace());
            $res->bindValue(':date', $reserv->getdate());

            // Exécution de la requête
            if ($res->execute()) {
                echo "<script>alert('Insertion des données réussie')</script>";
                return true;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion des données " . $e->getMessage();
            return false;
        }
    }
    public function updateReserv($cin, $nbprsn, $place,$date)
    {
        
    }
    public function deleteReserv($id)
    {
        $req = "DELETE FROM reserve WHERE id_reserv = ?";
        $res = $this->connexion->prepare($req);
        $res->execute($id);
    }
    
}
?>