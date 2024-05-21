<meta charset="UTF-8">
<?php

require_once '../model/adm_model.php';
require_once '../config/config.php';
class admController
{
    private $connexion;

    public function __construct()
    {
        $conn = new Config();
        $this->connexion = $conn->getConnexion();
    }

    public function createadm($job, $password, $username)
    {
        return new adm_model($job, $password, $username);
    }
    public function getadm()
    {
        try {
            // Préparer une requête SQL pour sélectionner tous les utilisateurs
            $req = "SELECT * FROM login_adm";
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
    public function getadmById($id)
    {
        $users = $this->getUsers();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userModel = new UserModel($user['job'], $user['password'], $user['username']);
                return $userModel;
            }
        }
        echo "<p class='error'>Aucun utilisateur trouvé avec l'ID " . $id . "</p>";
    }
    public function addadm($user)
    {
        try {
            // Préparez la requête SQL avec des marqueurs de paramètre
            $req = "INSERT INTO `login_adm` (`job`, `password`, `username`) 
                VALUES (:job, :password, :username)";
            $res = $this->connexion->prepare($req);

            // Liaison des valeurs avec bindValue
            $res->bindValue(':job', $user->getjob());
            $res->bindValue(':password', $user->getpassword());
            $res->bindValue(':username', $user->getusername());

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
    public function updateadm($job, $password, $username)
    {
    }
    public function deleteadm($id)
    {
        $req = "DELETE FROM login_adm WHERE id_adm = ?";
        $res = $this->connexion->prepare($req);
        $res->execute($id);
    }
    
    
    
    public function logIn($job, $password)
    {
        $sql = "SELECT * FROM login_adm WHERE job = :job AND password = :password limit 1";
        $res = $this->connexion->prepare($sql);
        $res->bindValue(':job', $job);
        $res->bindValue(':password', $password);
        $res->execute();
        if ($res->rowCount() > 0) {
            echo "Le nom d'utilisateur existe dans la base de données.";
            session_start();
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $_SESSION['job'] = $job;
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            header("location:page_administrateur.php");
            return true;
        } else {
            echo "Email ou mot de passe incorrect";
            return false;

        }

    }


}
?>