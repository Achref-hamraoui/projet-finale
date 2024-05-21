<?php
include_once "../controller/adm_controller.php";
$admController = new admController ();
?>
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
                  
                    $adm = $admController -> createadm($job, $password, $username);

                    $admController -> logIn($job, $password);
                    
                    

                    header("location:page_administrateur.php");
                  }
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
