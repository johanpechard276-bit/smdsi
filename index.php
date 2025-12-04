<?php
// Traitement du formulaire
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['name'];
    $email = $_POST['email'];

    if (empty($nom) || empty($email)) {
        $message = "<p style='color: red;'>Vos informations ne sont pas correctes</p>";
    } else {
        $message = "<p style='color: green;'>Votre demande a bien été envoyée</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Maquette SMDSI</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#section-1">Accueil</a></li>
                <li><a href="#section-2">Contactez-moi</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="section-1" id="section-1">
            <div>
                <div id="div-1">
                    <p>img</p>
                    <img src="https://picsum.photos/128/64" alt="logo" class="logo" />
                </div>
                <div id="div-2">
                    <p>p</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div id="div-3">
                    <p>p</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="section-2" id="section-2">
            <form method="post" action="">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Valider</button>
            </form>
            <?php echo $message; ?>
        </div>
    </main>
    <footer>
        <p><?php echo "Page web faites par \"johan\" "; ?></p>
    </footer>

    <script src="main.js"></script>
</body>

</html>