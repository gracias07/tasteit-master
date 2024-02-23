<?php
session_start();
if (isset($_GET['id'])){
$id= $_GET['id'];
if (isset($_SESSION['panier']['id'])) {
    $_SESSION['panier']['id'] .='|'. $id; 
    header('location:menu.php');
}else{
    $_SESSION['panier']['id'] ='|'. $id; 
    header('location:menu.php');

}
}
?>