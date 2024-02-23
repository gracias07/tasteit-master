<?php
require './config.php';
$plats = explode('|',$_SESSION['panier']['id']);
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <table class="table  table-striped  ">
        <thead>
            <th>plat</th>
            <th>prix</th>
            <th>action</th>
        </thead>
        <tbody>
            <tr>
                <?php foreach($plats as $plat){
                    $query=$bd->query("SELECT * FROM enregistrement WHERE id = '$plat'")->fetchAll();
                    foreach($query as $req){
                    ?>
               <tr>
               <td><?= $req->nom ?></td>
                <td><?=  $req->prix ?></td>
                <td style="display:flex;justify-content:space-between" class="">
                    <a href="process.php?id=<?= $req->id ?>" class="btn btn-warning">Annuler</a>
              <!--    <a href="process.php?validation=<?=  $req->id ?> " class="btn btn-success">Valider</a> !----->
                    <a href="fedapay.php?validation=<?=  $req->id ?> " class="btn btn-success">Validate</a>
                </td>
               </tr>

                <?php } } ?>

            </tr>
        </tbody>
    </table>
</body>
</html>