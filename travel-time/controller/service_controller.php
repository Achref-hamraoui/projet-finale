<meta charset="UTF-8">
<?php

require_once '../model/service_model.php';
require_once '../config/config.php';
class serviceController
{
    private $connexion;

    public function __construct()
    {
        $conn = new Config();
        $this->connexion = $conn->getConnexion();
    }

    public function createService($cin, $hebergement, $transport,$guide,$visaetdoc,$santeetsecurite)
    {
        return new service_model($cin, $hebergement, $transport,$guide,$visaetdoc,$santeetsecurite);
    }
    public function getService()
    {
        try {
            // Préparer une requête SQL pour sélectionner tous les utilisateurs
            $req = "SELECT * FROM service";
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
    public function getServiceById($id)
    {
        $users = $this->getService();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userModel = new UserModel($user['cin'], $user['hebergement'], $user['transport'], $user['guide'], $user['visaetdoc'], $user['santeetsecurite']);
                return $userModel;
            }
        }
        echo "<p class='error'>Aucun utilisateur trouvé avec l'ID " . $id . "</p>";
    }
    public function addService($service)
    {
        try {
            // Préparez la requête SQL avec des marqueurs de paramètre
            $req = "INSERT INTO `service` (`cin`, `hebergement`, `transport`, `guide`, `visaetdoc`, `santeetsecurite`) 
                VALUES (:cin, :hebergement, :transport, :guide, :visaetdoc, :santeetsecurite)";
            $res = $this->connexion->prepare($req);

            // Liaison des valeurs avec bindValue
            $res->bindValue(':cin', $service->getcin());
            $res->bindValue(':hebergement', $service->gethebergement());
            $res->bindValue(':transport', $service->gettransport());
            $res->bindValue(':guide', $service->getguide());
            $res->bindValue(':visaetdoc', $service->getvisaetdoc());
            $res->bindValue(':santeetsecurite', $service->getsanteetsecurite());

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
    public function updateService($cin, $hebergement, $transport,$guide,$visaetdoc,$santeetsecurite)
    {
        
    }
    public function deleteService($id)
    {
        $req = "DELETE FROM service WHERE id_serv = ?";
        $res = $this->connexion->prepare($req);
        $res->execute($id);
    }
    
}
?>