<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="page_administrateur.css">
  <title>Admin Panel</title>
</head>
<body>
  <header>
    <h1>Bienvenue sur le panel d'administration!</h1>
  </header>
  <nav>
    <ul>
      <li><a href="page_administrateur.php">administrateur</a></li>
      <li><a href="page_employee.php">employee</a></li>
      
    </ul>
  </nav>
  <main>
   
    <section>
      <h2>Les derniers comptes crées !</h2>
      <?php
      try {
        $pdo = new PDO('mysql:host=localhost;dbname=data', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        // En cas d'erreur, affichage du message d'erreur et arrêt du script
        echo 'Erreur : ' . $e->getMessage();
        die();
    }
      $strategies=$pdo->query('SELECT * FROM signup')->fetchall(PDO::FETCH_OBJ);
      ?>
      <table class="table-striped">
        <thead>
          <tr>
            <th>name</th>
            <th>password</th>
            <th>mail</th>
         </tr>
       </thead>
       <tbody>
       <?php foreach ($strategies as $signup) : ?>
        <tr>
          <td><?= $signup->name?></td>
          <td><?= $signup->password?></td>
          <td><?= $signup->mail?></td>
       </tr>
       <?php endforeach ; ?>
       </tbody>
       </table>
    </section>
    
    <section>
      <h2>payement et commande</h2>
      <?php
      try {
        $pda = new PDO('mysql:host=localhost;dbname=data', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        // En cas d'erreur, affichage du message d'erreur et arrêt du script
        echo 'Erreur : ' . $e->getMessage();
        die();
    }
      $strategie=$pda->query('SELECT * FROM pay')->fetchall(PDO::FETCH_OBJ);
      ?>
      <table class="table-striped">
        <thead>
          <tr>
            <th>card_holder</th>
            <th>card_number</th>
            <th>expiry_date</th>
            <th>cvc</th>
           <th>service</th>
         </tr>
       </thead>
       <tbody>
       <?php foreach ($strategie as $pay) : ?>
        <tr>
          <td><?= $pay->card_holder?></td>
          <td><?= $pay->card_number?></td>
          <td><?= $pay->expiry_date?></td>
          <td><?= $pay->cvc?></td>
          <td><?= $pay->service?></td>
       </tr>
       <?php endforeach ; ?>
       </tbody>
       </table>
    </section>
  </main>
</body>
</html>
