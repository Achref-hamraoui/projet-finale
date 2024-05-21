<meta charset="UTF-8">
<?php

require_once '../model/user_model.php';
require_once '../config/config.php';
class UserController
{
    private $connexion;

    public function __construct()
    {
        $conn = new Config();
        $this->connexion = $conn->getConnexion();
    }

    public function createUser($name, $password, $mail)
    {
        return new user_model($name, $password, $mail);
    }
    public function getUsers()
    {
        try {
            // Préparer une requête SQL pour sélectionner tous les utilisateurs
            $req = "SELECT * FROM signup";
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
    public function getUserById($id)
    {
        $users = $this->getUsers();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userModel = new UserModel($user['name'], $user['password'], $user['mail']);
                return $userModel;
            }
        }
        echo "<p class='error'>Aucun utilisateur trouvé avec l'ID " . $id . "</p>";
    }
    public function addUser($user)
    {
        try {
            // Préparez la requête SQL avec des marqueurs de paramètre
            $req = "INSERT INTO `signup` (`name`, `password`, `mail`) 
                VALUES (:name, :password, :mail)";
            $res = $this->connexion->prepare($req);

            // Liaison des valeurs avec bindValue
            $res->bindValue(':name', $user->getname());
            $res->bindValue(':password', $user->getpassword());
            $res->bindValue(':mail', $user->getmail());

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
    public function updateUser($name, $password, $mail)
    {
    }
    public function deleteUser($id)
    {
        $req = "DELETE FROM signup WHERE id_client = ?";
        $res = $this->connexion->prepare($req);
        $res->execute($id);
    }
    
    public function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                $req = "SELECT * FROM signup WHERE mail = :email";
                $res = $this->connexion->prepare($req);
                $res->bindValue(':email', $email);
                $res->execute();
                if ($res->rowCount() > 0) {
                    echo "L'email existe déjà !";
                    return false;
                } else {
                    return true;
                }
            } catch (PDOException $e) {
                echo "Erreur lors de l'extraction des données " . $e->getMessage();
                return false;
            }
        } else {
            echo "L'email n'est pas valide";
            return false;
        }
    }
    public function signUp($user)
    {
        if ($this->validEmail($user->getmail())) {
            if ($this->addUser($user)) {
                return true;
            }
        }
    }
    public function logIn($email, $password)
    {
        $sql = "SELECT * FROM signup WHERE mail = :email AND password = :password limit 1";
        $res = $this->connexion->prepare($sql);
        $res->bindValue(':email', $email);
        $res->bindValue(':password', $password);
        $res->execute();
        if ($res->rowCount() > 0) {
            echo "Le nom d'utilisateur existe dans la base de données.";
            session_start();
            $row = $res->fetch(PDO::FETCH_ASSOC);
            $_SESSION['mail'] = $mail;
            $_SESSION['name'] = $row['name'];
            $_SESSION['password'] = $password;
            $_SESSION['loggedin'] = true;
            header("location:connect.php");
            return true;
        } else {
            echo "Email ou mot de passe incorrect";
            return false;

        }

    }


    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location:../phpcss/index.php");

    }

}
?>