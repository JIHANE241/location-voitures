
<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $redirect = $_POST['redirect'] ?? 'index.php'; // récupérer redirect dès le début

    /* ===================== LOGIN ===================== */
    if (isset($_POST["login"])) {

        $identifiant = $_POST["Username"] ?? "";
        $password = $_POST["Password"] ?? "";

        $sql = "SELECT * FROM users WHERE email='$identifiant' OR username='$identifiant'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];

                // redirection après login
                header("Location: $redirect");
                exit();
            } else {
                echo "<script>alert('Mot de passe incorrect');</script>";
            }

        } else {
            echo "<script>alert('Utilisateur introuvable');</script>";
        }
    }

    /* ===================== SIGN UP ===================== */
    if (!isset($_POST["login"]) &&
        isset($_POST["Username"], $_POST["Email"], $_POST["Password"])) {

        $username = $_POST["Username"];
        $email = $_POST["Email"];
        $password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

        $check = $conn->query(
            "SELECT * FROM users WHERE email='$email' OR username='$username'"
        );

        if ($check && $check->num_rows > 0) {
            echo "<script>alert('Cet email ou nom d’utilisateur existe déjà');</script>";
        } else {
            $conn->query(
                "INSERT INTO users (username, email, password)
                 VALUES ('$username', '$email', '$password')"
            );
            echo "<script>alert('Inscription réussie. Connectez-vous');</script>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="dy">
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

  <div class="page-container">
    <div class="container" id="container">

      <!-- Sign Up Form -->
      <div class="form sign-up-container">
        <form action="login.php" method="POST">
          <h1>Create An Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
          </div>
          <span class="spa">or use your email for registration</span>
          <div class="input-field">
            <input type="hidden" name="redirect" value="<?= htmlspecialchars($_GET['redirect'] ?? '') ?>">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username" name="Username" required />
          </div>
          <div class="input-field">
            <i class="fa fa-envelope"></i>
            <input type="email" placeholder="Email" name="Email" required />
          </div>
          <div class="input-field">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" required />
          </div>
          <button type="submit">Sign Up</button>
        </form>
      </div>

      <!-- Sign In Form -->
      <div class="form sign-in-container">
        <form action="login.php" method="POST">
          <h1>Login</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
          </div>
          <span>or use your account</span>
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username/Email" name="Username" required />
          </div>
          <div class="input-field">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" required />
          </div>
          <a href="#">Forgot your password?</a>
          <button type="submit" name="login">Sign In</button>
        </form>
      </div>

      <!-- Overlay -->
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Start your engine. Your new car is just a click away!</h1>
            <img src="images/car.avif" style="height: 25rem; width: 30rem; padding-top: 5%;" />
            <button class="btn" id="signInBtn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Come on, book your dream car now!</h1>
            <img src="images/car.avif" style="height: 25rem; width: 30rem;" />
            <button type="button" class="btn" id="signUpBtn">Sign Up</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    const signUpButton = document.getElementById('signUpBtn');
    const signInButton = document.getElementById('signInBtn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
  </script>
</body>
</html>
