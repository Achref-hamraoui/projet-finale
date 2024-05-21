<?php
include_once "../controller/service_controller.php";
$serviceController = new serviceController ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payy.css">
    <script src="pay.js"></script>
    <title>service</title>
</head>
<body>
  
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>S</p>
    </div>
    
    
    <h2>Service Gateway</h2>

   
    <div class="form">
      <div class="card space icon-relative">
      <form action="" method="post">
        
      
        <div class="card space icon-relative">
        <label class="label">cin</label>
        <input type="text" class="input" name="cin" id="cin" >
        <i class="far fa-credit-card"></i>
        </div>
        <div class="card space icon-relative">
        <label class="label">hebergement</label>
        <input type="text" class="input" name="hebergement" id="hebergement" >
        
        </div>
        <div>
        <div class="card space icon-relative">
          <label class="label">transport</label>
          <input type="text" name="transport" id="transport" class="input">
          </div> 

        <div class="label">
         <div class="card space icon-relative">
          <label class="label">guide</label>
          <input type="text" name="guide" id="guide" class="input"  >
         
         </div> 
         <div class="label">
         <div class="card space icon-relative">
          <label class="label">visaetdoc</label>
          <input type="text" name="visaetdoc" id="visaetdoc" class="input"  >
         
         </div> 
         <div class="label">
         <div class="card space icon-relative">
          <label class="label">santeetsecurite</label>
          <input type="text" name="santeetsecurite" id="santeetsecurite" class="input"  >
         
         </div> 
</div>
      <div class="btn">
      <button type="submit" value="ajouter">commander</button>
     </div>
  </div>
</div>
</form>
<?php
    if (isset($_POST["cin"]) && isset($_POST["hebergement"]) && isset($_POST["transport"]) && isset($_POST["guide"]) && isset($_POST["visaetdoc"]) && isset($_POST["santeetsecurite"])) {

        $cin = $_POST["cin"];
        $hebergement = $_POST["hebergement"];
        $transport = $_POST["transport"];
        $guide = $_POST["guide"];
        $visaetdoc = $_POST["visaetdoc"];
        $santeetsecurite = $_POST["santeetsecurite"];

        $service = $serviceController -> createService($cin, $hebergement, $transport,$guide,$visaetdoc,$santeetsecurite);

        $serviceController -> addService($service);
    }    
?>

</body>
</html>
