<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="temp.css">
  
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="pagephp+css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="vanilla-zoom.min.css">
    <script src ="../js/login.js"></script>
</head>

<body>
    <header>
        <div class="container" id="cont">
            <a href="#" class="logo">
                <img src="../img/travel.webp" alt="">
            </a>
            <nav>
                <i class="fa-solid fa-bars azm"></i>
                <ul>
                    <li><a class="active" href="">Sign in</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <div class="form">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </nav>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="mail">Email</label>
                        <input class="form-control item"name="mail" type="mail" id="mail"></div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" name="password" type="password" id="password"></div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary" type="submit" onclick="validateForm()">Log In</button>
                </form>
                <?php
                $error = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
                    if (empty($mail)) {
                        $error .= "Veuillez entrer votre e-mail.<br>";
                    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $error .= "Veuillez entrer une adresse e-mail valide.<br>";
                    }
                    if (empty($password)) {
                        $error .= "Veuillez entrer votre mot de passe.<br>";
                    }
                
                    if (empty($error)) {
                        $mail = htmlspecialchars($mail);
                        $password = md5($password); 
                                        $connexion = new mysqli("localhost", "root", "", "data");
                
                        if ($connexion->connect_error) {
                            die("La connexion a échoué : " . $connexion->connect_error);
                        }
                
                        $sql = "SELECT * FROM signup WHERE mail = '$mail' AND password = '$password' ";
                
                        $resultat = $connexion->query($sql);
                
                        if ($resultat->num_rows > 0) {
                            session_start();
                            $row = $resultat->fetch_assoc();
                            $_SESSION['mail'] = $mail;
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['password'] = $password;
                            $_SESSION['loggedin'] = true;
                            header("location: connect.php");
                        } else {
                            $error .= "Veuillez vérifier l'e-mail ou le mot de passe saisi.";
                        }
                
                        $connexion->close();
                    }
                }
                ?>
                
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2022 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>