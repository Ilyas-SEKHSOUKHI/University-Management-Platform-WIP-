<?php
    // Page Etudiant
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Étudiant</title>
    <link rel="icon" type="image/png" href="../Images/University_icon.png">
    <link rel="stylesheet" href="../CSS/espace_etudiant.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <img src="../Images/logoNav.png" class="logo">

    <div class="nav_links">
        <a href="#">Accueil</a>
        <a href="#">Modules</a>
        <a href="#">Notes</a>
        <a href="#">Profil</a>
    </div>

    <div class="profil">
        <p>Ilyas Sekhsoukhi</p>
        <img src="../Images/Profile.png" class="user_img">
    </div>
</nav>

<!-- IMAGE -->
<img src="../Images/BannierEtudiant.png" class="banner">

<!-- MAIN -->
<main class="container">

    <section class="card">
        <h2>Mes Cours</h2>
        <ul>
            <li>Introduction à la Psychologie</li>
            <li>Droit Constitutionnel</li>
            <li>Marketing Digital</li>
        </ul>
        <button>Voir tous les cours</button>
    </section>

    
    <section class="card">
        <div id="Annonces_Etudiant">
        <h2>Annonces</h2>
        <div class="box">
            <h3>Rappel</h3>
            <p>Date limite : 15 septembre</p>
        </div>
        <div class="box">
            <h3>Événement</h3>
            <p>Conférence le 22 septembre</p>
        </div>
        </div>
    </section>

    <section class="card">
        <h2>Ressources</h2>
        <p><i class="fas fa-book"></i> Bibliothèque</p>
        <p><i class="fas fa-life-ring"></i> Guides</p>
        <p><i class="fas fa-headset"></i> Support</p>
    </section>

    <section class="card">
        <h2>Emploi du Temps</h2>
        <table>
            <tr><th></th><th>Lundi</th><th>Mercredi</th></tr>
            <tr><th>9:00</th><td>Psychologie</td><td>-</td></tr>
            <tr><th>12:00</th><td>Droit</td><td>-</td></tr>
        </table>
    </section>

    <section class="card">
        <h2>Messages</h2>
        <p><i class="fas fa-comment"></i> Prof: devoir</p>
        <p><i class="fas fa-comment"></i> Sophie: notes</p>
    </section>

</main>

    <div id="Dark_Mode_click">
        <button id="bt_Dark" onclick="DarkMode()">
            Dark Mode
        </button>
    </div>

<!-- FOOTER -->
<footer>
    <p>Ilyas Sekhsoukhi</p>
    <a href="mailto:sekhsoukhiilyas@gmail.com">Email</a>
</footer>

<script src="../JavaScript/espace_etudiant.js"></script>
<script src="../JavaScript/espace_enseignants.js"></script>

</body>
</html>