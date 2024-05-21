<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payy.css">
    <script src="../js/pay.js"></script>
    <title>reservation</title>
</head>
<body>
  
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>R</p>
    </div>
    
    
    <h2>Reservation Gateway</h2>

   
    <div class="form">
      <div class="card space icon-relative">
      <form action="" method="post">
        
      
        <div class="card space icon-relative">
        <label class="label">cin</label>
        <input type="text" class="input" name="cin" id="cin" >
        <i class="far fa-credit-card"></i>
        </div>
        <div class="card space icon-relative">
        <label class="label">nombre_personne:</label>
        <input type="text" class="input" name="nbprsn" id="nbprsn" >
        <i class="fas fa-user"></i>
        </div>
        <div>
          <label class="label">place</label>
          <input type="text" name="place" id="place" class="input">
          </div> 

        <div class="card-grp space">
          <div class="card-item icon-relative">
            <label class="label">Date:</label>
            <input type="date" name="date" id="date" class="input" >
           
        </div>
        
</div>
      <div class="btn">
      <button type="submit" value="ajouter">Reserver</button>
     </div>
  </div>
</div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $connexion = new PDO("mysql:host=localhost;dbname=data", "root", "");

    if (isset($_POST["cin"]) && isset($_POST["nbprsn"]) && isset($_POST["place"]) && isset($_POST["date"])) {
       
        $cin = $_POST["cin"];
        $nbprsn = $_POST["nbprsn"];
        $place = $_POST["place"];
        $date = $_POST["date"]; 

      
        $req = "INSERT INTO reservation (cin, nbprsn, place, date) VALUES (:cin, :nbprsn, :place, :date)";
        $res = $connexion->prepare($req);

        $res->bindParam(':cin', $cin);
        $res->bindParam(':nbprsn', $nbprsn);
        $res->bindParam(':place', $place);
        $res->bindParam(':date', $date);

        $res->execute();

        if ($res->rowCount() > 0) {
            echo "Reservation created successfully.";
        } else {
            echo "Failed to create reservation.";
        }
    } else {
        echo "All fields are required.";
    }
}
?>

</body>
</html>
