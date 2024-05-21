<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payy.css">
    <script src="../js/pay.js"></script>
    <title>Document</title>
</head>
<body>
  
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    
    
    <h2>Payment Gateway</h2>

   
    <div class="form">
      <div class="card space icon-relative">
      <form action="" method="post">
        
      <div>
          <label class="label">service:</label>
          <input type="text" name="service" id="service" class="input">
          
        </div>
        <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" name="card_holder" id="card_holder" placeholder="Coding Market">
        <i class="fas fa-user"></i>
        </div>
        <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" name="card_number" id="card_number" data-mask="0000 0000 0000 0000" placeholder="Card Number">
        <i class="far fa-credit-card"></i>
        </div>
        <div class="card-grp space">
         <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="date" name="expiry_date" id="expiry_date" class="input" >
         
         </div>    
         <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" name="cvc" id="cvc" data-mask="000" placeholder="000">
          <i class="fas fa-lock"></i>
         </div>
        </div>
      <div class="btn">
      <button type="submit" value="ajouter">pay</button>
     </div>
  </div>
</div>
</form>
<?php
if (isset($_POST["service"]) && isset($_POST["card_holder"]) && isset($_POST["card_number"]) && isset($_POST["expiry_date"]) && isset($_POST["cvc"])) {

 
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=data", "root", "");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }


    $service = $_POST["service"];
    $card_holder = $_POST["card_holder"];
    $card_number = $_POST["card_number"];
    $expiry_date = $_POST["expiry_date"];
    $cvc = $_POST["cvc"];

    
    try {
        $req = "INSERT INTO pay(service, card_holder, card_number, expiry_date, cvc) VALUES (:service, :card_holder, :card_number, :expiry_date, :cvc)";
        $res = $connexion->prepare($req);
        $res->bindParam(':service', $service);
        $res->bindParam(':card_holder', $card_holder);
        $res->bindParam(':card_number', $card_number);
        $res->bindParam(':expiry_date', $expiry_date);
        $res->bindParam(':cvc', $cvc);
        $res->execute();
        echo "Data inserted successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

</body>
</html>
