<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="admcss.css">
</head>
<body>
    <div class="container">
        <img src="../img/travel.jpg" alt="Login">
        <h1>Administration Login</h1>
        <form action="" method="post">
        <label for="job">Job:</label>
          <input type="text" id="job" name="job" placeholder="write your job">
          <label for="Username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Username">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Password">
          <button type="submit">Login</button>
          <span class="psw">Forgot password?</span>
          <?php
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (isset($_POST['job']) && isset($_POST['username']) && isset($_POST['password'])) {                
                  $job = $_POST['job'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];                
                  $errors = array(); 
                  if (empty($job)) {
                      $errors[] = "Veuillez entrer un job.";
                  }                 
                  if (empty($username)) {
                      $errors[] = "Veuillez entrer un nom d'utilisateur.";
                  }
                  if (empty($password)) {
                      $errors[] = "Veuillez entrer un mot de passe.";
                  }                            
                  if (!empty($errors)) {
                      foreach ($errors as $error) {
                          echo "<p>$error</p>";
                      }
                  } else {                  
                      $connexion = new mysqli("localhost", "root", "", "data");                          
                      $req = "INSERT INTO login_adm (job, username, password) VALUES (?, ?, ?)";
                      $stmt = $connexion->prepare($req);
                      $stmt->bind_param("sss", $job, $username, md5($password));                              
                      if ($stmt->execute()) {                          
                          session_start();
                          header("location: page_administrateur.php");
                          exit(); 
                      } else {
                          echo "Une erreur est survenue lors de l'insertion des données.";
                      }                                
                      $connexion->close();
                  }
              } else {
                  echo "Tous les champs du formulaire doivent être remplis.";
              }
          }
          ?>
          
        </form>
        <div class="create">
          <a href="#">Create your Amunt</a>
        </div>
      </div>
      
  </body>
</html>
