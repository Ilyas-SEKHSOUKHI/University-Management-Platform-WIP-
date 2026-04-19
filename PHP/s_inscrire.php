<?php
    // Page S'inscrire
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" type="image/png" href="../Images/University_icon.png">
    <link rel="stylesheet" href="../CSS/s_inscrire.css">
</head>
<body>

<div class="container">

    <form class="form" action="" method="post">

        <img src="../Images/Profile.png" class="avatar">

        <h1>S'inscrire</h1>

        <div class="row">
            <div class="input_group">
                <label>Nom</label>
                <input type="text" name="nom" required>
            </div>

            <div class="input_group">
                <label>Prénom</label>
                <input type="text" name="prenom" required>
            </div>
        </div>

        <div class="row">
            <div class="input_group">
                <label>Prof / Etudiant ?</label>
                <input list="WHO_ARE_YOU" name="WHO_ARE_YOU">
                <datalist id="WHO_ARE_YOU">
                    <option value="Prof">
                    <option value="Etudiant">
                </datalist>
            </div>

            <div class="input_group">
                <label>Classe</label>
                <input list="classes" name="classe">
                <datalist id="classes">
                    <option value="CPGE">
                    <option value="Génie Informatique">
                </datalist>
            </div>
        </div>

        <div class="row">
            <div class="input_group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input_group">
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>
        </div>

        <button type="submit">S'inscrire</button>

        <p class="link">
            Déjà un compte ? <a href="http://127.0.0.1:5500/HTML/se_connecter.html">Se connecter</a>
        </p>

    </form>

</div>

<div>
    <button id="Dark_Mode_click" onclick="DarkMode()">
        Dark Mode
    </button>
</div>

<script src="../JavaScript/s_inscrire.js"></script>

</body>
</html>