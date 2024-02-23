<?php
   if(isset($_POST['boutton-valider'])){// si on clique sur le bouton
    if(isset($_POST['email']) && isset($_POST['mdp'])){
        // Mettre l'email et le mdp dans les variables
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $erreur = "";
        // vérifier si les informations sont correctes
        // connexion à la base de donnée
        $nom_serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $nom_base_données ="test";
        $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);
        // requête pour sélectionner tout les utlisateurs
        $req = mysqli_query($con, "SELECT * FROM admini WHERE email= '$email' AND passw0rd= '$mdp' ");
        $num_ligne = mysqli_num_rows($req); // compter le nombre de ligne ayant rapport à la requète SQL
        if($num_ligne > 0){
            header("Location:index.php"); 
        }else{
            $erreur = "Adresse Mail ou Mot de passe incorrect !";
        }
    }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <!-- css file -->
       <link rel="stylesheet" href="./css/admin.css">
    <!-- css file -->
</head>
<body>
     <section>
        <h1>connexion</h1>
        <?php
         if(isset($erreur)){
            echo "<p class= 'Erreur'>".$erreur."</p>";
         }
        ?>
        <form action="" method="POST">
            <label>Adresse email</label>
            <input type="text" name="email">
            <label>Mot de passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider" name="boutton-valider">
        </form>
     </section>
</body>
</html>