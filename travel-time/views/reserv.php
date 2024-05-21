<?php
include_once "../controller/reserv_controller.php";
$reservController = new reservController ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payy.css">
    <script src="pay.js"></script>
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
          <label class="label">date:</label>
          <input type="date" name="date" id="date" class="input"  >
          
         </div> 
</div>
      <div class="btn">
      <button type="submit" value="ajouter">Reserver</button>
     </div>
  </div>
</div>
</form>
<?php
    if ( isset($_POST["cin"]) && isset($_POST["nbprsn"]) && isset($_POST["place"]) && isset($_POST["date"])) {
        
        $cin =$_POST["cin"];
        $nbprsn = $_POST["nbprsn"];
        $place=$_POST["place"];
        $date= $_POST["date"];
       
        $reserv = $reservController -> createReserv($cin, $nbprsn, $place,$date);

        $reservController -> addReserv ($reserv);
        try {
          
          echo "Data inserted successfully.";
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
    }    
    ?>
</body>
</html>
