<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maxwheels</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bo">
<header>
        <nav>
            <div class="logo">Auto <span>Rush</span></div>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="voiture.php" class="active">AllCars</a></li>
                <li><a href="service.php" class="active">Service</a></li>
                <li><a href="reservation.php<?php if(!isset($_SESSION['user_id'])) echo '?redirect=reservation.php'; ?>" class="active">Réservation</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="login.php" class="SignIN">Login</a>
            </div>
        </nav>
    </header>
  <section class="services-section">
    <h2>Our Services</h2>
    <div class="services-grid">
      <div class="service-card">
        <div class="icon">🚗</div>
        <h3>Car Selling</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="0"><a href="car_selling.php" style="color:white">Read More</a></button>
      </div>
      <div class="service-card">
        <div class="icon">🛠️</div>
        <h3>Parts Repair</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="1"><a href="parts_repair.php" style="color:white">Read More</a></button>
      </div>
      <div class="service-card">
        <div class="icon">💥</div>
        <h3>Car Insurance</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="2"><a href="Car_Insurance.php" style="color:white">Read More</a> </button>
      </div>
      <div class="service-card">
        <div class="icon">🔋</div>
        <h3>Battery Replacement</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="3"><a href="Battery_Replacement.php" style="color:white">Read More</a> </button>
      </div>
      <div class="service-card">
        <div class="icon">⛽</div>
        <h3>Oil Change</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="4"><a href="Oil change.php" style="color:white">Read More</a></button>
      </div>
      <div class="service-card">
        <div class="icon">🎧</div>
        <h3>24/7 Support</h3>
        <p>Lorem, Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corporis, Nisi.</p>
        <button id="5"><a href="support_car.php" style="color:white">Read More</a></button>
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
                <li><a href="voiture.php">Menu</a></li>
                <li><a href="reservation.php">Reservations</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>+198-0183792</p>
            <p><a href="mailto:Auto Rush@Contact.Com" style="color: rgb(177, 39, 39);">Auto Rush@Contact.Com</a></p>
        </div>
        <div class="footer-section map">
            <img src="images/Capture.png" alt="Map" style="width: 250px; height: 200px;">
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Auto Rush | Designed by <span>Jihane & Asmae & Hajar</span></p>
        <div class="social-icons">
            <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn"></a>
            <a href="#"><img src="images/youtube-icon.png" alt="YouTube"></a>
        </div>
        <script>
        </script>
    </div>
</footer>
</body>
</html>
