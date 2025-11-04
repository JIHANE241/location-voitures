<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=autorush;charset=utf8', 'root', '');

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Veuillez vous connecter pour réserver une voiture.'); window.location.href = 'login.php';</script>";
    exit();
}

if (isset($_POST['reserver'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $lieu = htmlspecialchars($_POST['location']);
    $date_debut = $_POST['pickup-date'];
    $date_retour = $_POST['return-date'];
    $voiture = htmlspecialchars($_POST['car-type']);

    // Récupérer id utilisateur
    $user = $_SESSION['user'];
    $stmtUser = $bdd->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmtUser->execute([$user, $user]);
    $userData = $stmtUser->fetch();

    if (!$userData) {
        echo "<script>alert('Utilisateur introuvable.'); window.location.href = 'login.php';</script>";
        exit();
    }

    $user_id = $userData['id'];

    $stmt = $bdd->prepare("INSERT INTO reservations (user_id, lieu, date_debut, date_retour, voiture) VALUES (?, ?, ?, ?, ?)");
    $success = $stmt->execute([$user_id, $lieu, $date_debut, $date_retour, $voiture]);

    if ($success) {
        echo "<script>alert('Réservation enregistrée avec succès !'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de la réservation.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réservation de voiture</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="dy">
<header>
    <nav>
        <div class="logo">Auto <span>Rush</span></div>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="voiture.php" class="active">AllCars</a></li>
            <li><a href="service.php" class="active">Service</a></li>
            <li><a href="reservation.php" class="active">Réservation</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="login.php" class="SignIN">Login</a>
        </div>
    </nav>
</header>

<div class="background">
    <div class="form-container">
      <form action="reservation.php" method="post">
       <h1 class="text-right">BOOK A CAR TODAY !</h1>

       <label for="name">Nom:</label>
       <input type="text" id="name" name="nom" placeholder="Your name please :" required>

       <label for="location">Location:</label>
       <select id="location" name="location" required>
         <option value="Tanger">Tanger</option>
         <option value="Casa">Casa</option>
          <option value="Rabat">Rabat</option>
          <option value="Marrakech">Marrakech</option>
         
       </select>

       <label for="pickup-date">Pickup-date</label>
       <input type="date" id="pickup-date" name="pickup-date" required>

       <label for="return-date">Return-date</label>
       <input type="date" id="return-date" name="return-date" required>

       <label for="car-type">Choose car-type :</label>
       <select id="car-type" name="car-type" required>
         <option value="Mercedes-AMG GT R">Mercedes-AMG GT R</option>
         <option value="BMW 428i">BMW 428i</option>
         <option value="Toyota 86 – Coupe">Toyota 86 – Coupe</option>
          <option value="Porsche 911">Porsche 911</option>
          <option value="Rolls-Royce Cullinan">Rolls-Royce Cullinan</option>
          <option value="Audi Q8">Audi Q8</option>
          <option value="Rolls-Royce Wraith">Rolls-Royce Wraith</option>
          <option value="Bugatti Chiron">Bugatti Chiron</option>
          <option value="Lamborghini Huracán">Lamborghini Huracan</option>
       </select>

       <button id="done" type="submit" name="reserver">BOOK NOW</button>
      </form>
    </div>
</div>

<script>
  document.getElementById('done').addEventListener('click', function () {
    alert("The car's booked congratulations !");
  });
</script>

</body>
</html>