<?php

    session_start();

    // recuperer les informations saisies par l'utilisateur
    $nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST,'prenom',FILTER_SANITIZE_SPECIAL_CHARS);
    $role = filter_input(INPUT_POST,'WHO_ARE_YOU',FILTER_SANITIZE_SPECIAL_CHARS);
    $classe = filter_input(INPUT_POST,'classe',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

    // Afficher les donnees saisies pour le test

    echo"<br>###### Afficher les donnees ######<br>";

    if(empty($nom)){
        echo "nom est vide <br>";
    }else{
        echo "{$nom} <br>";
        setcookie("nom",$nom,time()+(86400*30),"/");
    }

    if(empty($prenom)){
        echo "prenom est vide <br>";
    }else{
        echo "{$prenom} <br>";
        setcookie("prenom",$prenom,time()+(86400*30),"/");
    }

    if(empty($role)){
        echo "role est vide <br>";
    }else{
        echo "{$role} <br>";
        setcookie("role",$role,time()+(86400*30),"/");        
    }

    if(empty($classe)){
        echo "classe est vide <br>";
    }else{
        echo "{$classe} <br>";
        setcookie("classe",$classe,time()+(86400*30),"/");
    }

    if($email==false){
        echo "email invalide <br>";
    }else{
        echo "{$email} <br>";
        setcookie("email",$email,time()+(86400*30),"/");
    }

    if(empty($password)){
        echo "password est vide <br>";
    }else{
        echo "{$password} <br>";
    }

    // Afficher les COOKIES
    echo "<br>###### Afficher les COOKIES ######<br>";
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    // SESSION
    $_SESSION["nom"] = $nom;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["role"] = $role;
    $_SESSION["classe"] = $classe;
    $_SESSION["email"] = $email;

    // Choix du d'ashbord
    if($role == "Prof"){
        header('location: espace_enseignants.php');
        exit;
    }else{
        header('location: espace_etudiant.php');
        exit;
    }

    

?>