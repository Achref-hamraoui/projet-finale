<meta charset="UTF-8">
<?php

require_once '../model/pay_model.php';
require_once '../config/config.php';
class payController
{
    private $connexion;

    public function __construct()
    {
        $conn = new Config();
        $this->connexion = $conn->getConnexion();
    }

    public function createPay($card_holder, $card_number, $expiry_date, $cvc,$service)
    {
        return new pay_model ($card_holder, $card_number, $expiry_date, $cvc,$service);
    }
    public function getPay()
    {
        try {
            // Préparer une requête SQL pour sélectionner tous les utilisateurs
            $req = "SELECT * FROM pay";
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
    public function getPayById($id)
    {
        $users = $this->getPay();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userModel = new UserModel($user['card_holder'], $user['card_number'], $user['expiry_date'], $user['cvc'], $user['service']);
                return $userModel;
            }
        }
        echo "<p class='error'>Aucun utilisateur trouvé avec l'ID " . $id . "</p>";
    }
    public function addPay($pay)
    {
        try {
            // Préparez la requête SQL avec des marqueurs de paramètre
            $req = "INSERT INTO `pay` (`card_holder`, `card_number`, `expiry_date`, `cvc`, `service`) 
                VALUES (:card_holder, :card_number, :expiry_date, :cvc, :service)";
            $res = $this->connexion->prepare($req);

            // Liaison des valeurs avec bindValue
            $res->bindValue(':card_holder',$pay->getcard_holder());
            $res->bindValue(':card_number',$pay->getcard_number());
            $res->bindValue(':expiry_date',$pay->getexpiry_date());
            $res->bindValue(':cvc', $pay->getcvc());
            $res->bindValue(':service', $pay->getservice());

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
    public function updatepay($card_holder, $card_number, $expiry_date,$cvc,$service)
    {
        
    }
    public function deletepay($id)
    {
        $req = "DELETE FROM pay WHERE id_pay = ?";
        $res = $this->connexion->prepare($req);
        $res->execute($id);
    }
    
}
?>