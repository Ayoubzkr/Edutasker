<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <!-- Formulaire de connexion -->
    <form action="authenticate.php" method="post">
        <label for="email">login :</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Connexion">
    </form>
    <?php
    // Affichage du message d'erreur si nécessaire
    if (isset($_GET['error'])) {
        echo "<p style='color: red;'>Email ou mot de passe incorrect</p>";
    }
    ?>
</body>
</html>
