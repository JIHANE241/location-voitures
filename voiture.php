<?php
include("config.php"); // Connexion à la base de données

// Récupérer les voitures depuis la base de données
$query = "SELECT * FROM voitures"; // Requête pour récupérer toutes les voitures
$result = $conn->query($query); // Exécution de la requête
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MetroRide</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="bo">
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
<section class="collections">
    <h2>Our Car Collections</h2>
    <div class="cards">
        <?php while ($car = $result->fetch_assoc()): ?>
        <div class="card">
            <img src="<?= $car['image'] ?>" alt="<?= $car['nom'] ?>" />
            <div class="info">
                <p><strong><?= $car['prix'] ?>.00</strong>/Day <span>📍 <?= $car['localisation'] ?></span></p>
                <h3><?= $car['nom'] ?></h3>
                <button>📞 Book Now</button>
            </div>
        </div>
        <?php endwhile; ?>

        <!-- Voitures statiques (qui étaient déjà dans le code HTML d'origine) -->
        <div class="card">
            <img src="téléchargement.jpeg" alt="Mercedes-AMG GT R" />
            <div class="info">
                <p><strong>$80.00</strong>/Day <span>📍 Rabat</span></p>
                <h3>Mercedes-AMG GT R</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="images.jpeg" alt="BMW 428i F32" />
            <div class="info">
                <p><strong>$60.00</strong>/Day <span>📍 Tanger</span></p>
                <h3>BMW 428i – F32</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="téléchargement (1).jpeg" alt="Toyota 86 Coupe" />
            <div class="info">
                <p><strong>$40.00</strong>/Day <span>📍 Casa</span></p>
                <h3>Toyota 86 – Coupe</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="img1.jpg" alt="Mercedes-AMG GT R" />
            <div class="info">
                <p><strong>1000 DH </strong>/Day <span>📍 Marrakech</span></p>
                <h3>Bugatti Chiron</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="img3.jpg" alt="BMW 428i F32" />
            <div class="info">
                <p><strong>800 DH</strong>/Day <span>📍 Casa</span></p>
                <h3>Mercedes-AMG GT R</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="img4.jpg" alt="Toyota 86 Coupe" />
            <div class="info">
                <p><strong>400 DH </strong>/Day <span>📍 Rabat</span></p>
                <h3>Audi Q8</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="image9.jpg" alt="Toyota 86 Coupe" />
            <div class="info">
                <p><strong>400 DH </strong>/Day <span>📍 Marrakech</span></p>
                <h3>Rolls-Royce Cullinan</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="g.jpg" alt="Toyota 86 Coupe" />
            <div class="info">
                <p><strong>400 DH </strong>/Day <span>📍 Tanger</span></p>
                <h3>Rolls-Royce Wraith</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
        <div class="card">
            <img src="img7.jpg" alt="Lamborghini Huracán" />
            <div class="info">
                <p><strong>400 DH </strong>/Day <span>📍 Rabat</span></p>
                <h3>Lamborghini Huracán</h3>
                <button><a href="reservation.php" style="color:white">📞 Book Now</a> </button>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="ainer">
        <div class="footer-section">
            <h3>Address</h3>
            <p>96 East Central Park Road, New York, USA</p>
        </div>
        <div class="footer-section">
            <h3>Details</h3>
            <ul>
                <li><a href="voiture.php">AllCars</a></li>
                <li><a href="reservation.php">Reservation</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>+198-0183792</p>
            <p><a href="mailto:Auto Rush@Contact.Com" style="color: rgb(177, 39, 39);">Auto Rush@Contact.Com</a></p>
        </div>
        <div class="footer-section map">
            <img src="Capture.png" alt="Map" style="width: 250px; height: 200px;">
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Auto Rush | Designed by <span>Jihane & Asmae & Hajar</span></p>
        <div class="social-icons">
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
            <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
        </div>
    </div>
</footer>
</body>
</html>
