<?php
    // Page Enseignant
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Enseignant</title>
    <link rel="icon" type="image/png" href="../Images/University_icon.png">
    <link rel="stylesheet" href="../CSS/espace_enseignants.css">
    <script src="../JavaScript/espace_enseignants.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <img src="../Images/logoNav.png" class="logo">

    <div class="nav_links">
        <a href="#">Accueil</a>
        <a href="#">Cours</a>
        <a href="#">Notes</a>
        <a href="#">Étudiants</a>
    </div>

    <div class="profil">
        <p>Ilyas Sekhsoukhi</p>
        <img src="../Images/Profile.png" class="user_img">
    </div>
</nav>

<!-- BANNER -->
<img src="../Images/BanniereProf.png" class="banner">

<!-- MAIN -->
<main class="container">

    <section class="card">
        <div id="NCours">
            <h2>Nombre de cours</h2>
            <h3 id="Cours_conteur">3</h3>
        </div>
    </section>

    <section class="card">
        <div id="NTaches">
            <h2>Nombre de tâches</h2>
            <h3 id="Tache_conteur">0</h3>
        </div>
    </section>

    <section class="card">
        <div id="NAnnonces">
            <h2>Nombre d'annonces</h2>
            <h3 id="Annonces_conteur">2</h3>
        </div>
    </section>

    <!-- MES COURS -->
    <section class="card">
        <h2>Mes Cours</h2>
        <div>
            <input type="text" id="Cours">
        </div>
        <ul id="Cours_List">
            <li>
                Introduction à la Psychologie
                <button id="Supp_Cour" onclick="Supp_Cour(this)">Supp Cour Test</button>
            </li>
            <li>
                Droit Constitutionnel
                <button id="Supp_Cour" onclick="Supp_Cour(this)">Supp Cour Test</button>
            </li>
            <li>
                Marketing Digital
                <button id="Supp_Cour" onclick="Supp_Cour(this)">Supp Cour Test</button>
            </li>
        </ul>
        <button onclick="Cours()">Ajouter un cours</button>
    </section>

    <!-- TACHES -->
    <section  class="card">
        <h2>Tâches à faire</h2>
        
    <div id="ToDoList">
        <div>
            <input type="text" id="Task">
        </div>
                <button onclick="ToDoList()">Créer une tâche</button>

        <div id="cards">
        <div id="listtask">

        </div>
        </div>       
    </div>
    </section>

    <!-- ANNONCES -->
    <section class="card">
        <h2>Annonces</h2>
    <div id="Annonces">

        <div>
            <input type="text" id="Annonces_Entred" name="Annonce">
        </div>

        <div class="annonce">
            <i class="fas fa-file"></i>
            <div>
                <b>Nouvelle ressource</b>
                <p>Aujourd'hui</p>
                <button id="SuppAnnonceButton" onclick="SuppAnnonce(this)">Supp Annonce Test</button>
            </div>
        </div>

        <div class="annonce">
            <i class="fas fa-file"></i>
            <div>
                <b>Rappel devoir</b>
                <p>Hier</p>
                <button id="SuppAnnonceButton" onclick="SuppAnnonce(this)">Supp Annonce Test</button>
            </div>
        </div>
    </div>
        <button onclick="annonce()">Créer une annonce</button>
    </section>

    <!-- EVENEMENTS -->
    <section class="card">
        <h2>Événements</h2>
        <p><i class="fas fa-calendar"></i> Réunion - 28 sept</p>
        <p><i class="fas fa-calendar"></i> Conférence - 22 sept</p>
    </section>

    <!-- MESSAGES -->
    <section class="card">
        <h2>Messages</h2>
        <p><i class="fas fa-comments"></i> Question devoir</p>
        <p><i class="fas fa-comments"></i> Absence cours</p>
    </section>

    <!-- RESSOURCES -->
    <section class="card">
        <h2>Ressources</h2>
        <p><i class="fas fa-book"></i> Matériel pédagogique</p>
        <p><i class="fas fa-tools"></i> Support technique</p>
        <p><i class="fas fa-graduation-cap"></i> Formations</p>
    </section>

    <div id="Dark_Mode_click">
        <button id="bt_Dark" onclick="DarkMode()">
            Dark Mode
        </button>
    </div>

</main>

<!-- FOOTER -->
<footer>
    <p>Ilyas Sekhsoukhi</p>
</footer>


</body>
</html>