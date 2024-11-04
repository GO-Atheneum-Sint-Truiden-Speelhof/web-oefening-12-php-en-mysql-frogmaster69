<?php
session_start();

// Database verbinding maken
$servernaam = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servernaam, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Als het formulier is ingediend, voer dan de login controle uit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (empty($user) || empty($pass)) {
        $error = "Vul alle velden in!";
    } else {
        // Voorkom SQL injectie door input te ontsnappen
        $user = $conn->real_escape_string($user);
        $sql = "SELECT * FROM gebruikers WHERE username = '$user'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Controleer of het ingevoerde wachtwoord klopt
            if (password_verify($pass, $row['password'])) {
                $_SESSION['username'] = $row['username']; // Opslaan in de sessie
                header('Location: dashboard.php'); // Doorsturen naar dashboard
                exit;
            } else {
                $error = "Onjuist wachtwoord.";
            }
        } else {
            $error = "Gebruikersnaam bestaat niet.";
        }
    }
}

$conn->close();
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="path_to_bootstrap.css"> <!-- Voeg hier Bootstrap toe als je die gebruikt -->
</head>
<body>
    <div class="container" style="max-width: 500px; margin-top: 50px;">
        <h2 class="text-center">Inloggen</h2>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="username">Gebruikersnaam</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Inloggen</button>
        </form>
    </div>
</body>
</html>
