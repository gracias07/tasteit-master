<?php
require_once './config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    extract($_GET);

    $_SESSION['panier']['id'] = str_replace('|'.$id,'',$_SESSION['panier']['id']);
   header('location:listespanier.php');
}
if(isset($_GET['validation']) && !empty($_GET['validation'])){
    extract($_GET);
    if (!isset($_SESSION['client']) || !isset($_SESSION['numero']) || !isset($_SESSION['addresse'])) {
        header('location:client.php');
    }else {
        $data =$bd->query("SELECT * from enregistrement where id = '$validation'")->fetch();
        $plat  = $data->nom;
        $prix  = $data->prix;
        $nom =  $_SESSION['client'];
        $addresse =  $_SESSION['addresse'];
        $num =  $_SESSION['numero'];
        $commande = $bd->prepare("INSERT INTO panier (plat,prix,client,addresse,numero) VALUES(?,?,?,?,?)");
        $commande->execute([$plat,$prix,$nom,$addresse,$num]);
        $_SESSION['panier']['id'] = str_replace('|'.$validation,'',$_SESSION['panier']['id']);
        header('location:listespanier.php?display='.$val);
    }
}