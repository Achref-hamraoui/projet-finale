<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="pagephp+css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="vanilla-zoom.min.css">
    <script src ="../js/login.js"></script>
    <link rel="stylesheet" href="temp.css">

</head>

<body>
    <header>
        <div class="container" id="cont">
            <a href="#" class="logo">
                <img src="travel.webp" alt="">
            </a>
            <nav>
                <i class="fa-solid fa-bars azm"></i>
                <ul>
                    <li><a class="active" href="">Sign up</a></li>
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
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>merci de creer votre compte !</p>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                    <input class="form-control item" name="name" type="text" id="name">
                </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                    <input class="form-control item" name="password" type="password" id="password">
                </div>
                    <div class="mb-3">
                        <label class="form-label" for="mail">Email</label>
                    <input class="form-control item" name="mail" type="mail" id="mail">
                </div>
                    <button class="btn btn-primary" type="submit" value="ajouter" onclick="validateForm()">Sign Up</button>
                    
                </form> 
                <?php
if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["mail"])) {
   
    if (!empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["mail"])) {
        $connexion = new PDO("mysql:host=localhost;dbname=data", "root", "");    
        $name = htmlspecialchars($_POST["name"]);
        $password = md5($_POST["password"]);
        $mail = htmlspecialchars($_POST["mail"]);

        $req = "INSERT INTO signup(name,password,mail) VALUES ('$name','$password','$mail')";
        $res = $connexion->prepare($req);
        $res->execute();
    } else {    
        echo "Veuillez remplir tous les champs du formulaire.";
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