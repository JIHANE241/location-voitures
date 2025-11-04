<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restau Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                <?php if (isset($_SESSION['user'])): ?>
                    <span>Bonjour, <?= $_SESSION['user'] ?> | <a href="logout.php">Logout</a></span>
                <?php else: ?>
                    <a href="login.php" class="SignIN">Login</a>
                <?php endif; ?>
            </div>

        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Ready to roll? Choose your car today!</h1>
            <p>Discover a wide range of cars to suit your needs. Whether you're looking for a compact car, SUV, or luxury vehicle, we have it all.</p>
        </div>
        
    </section>
    
</body>
</html>

    