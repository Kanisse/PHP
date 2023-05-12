<?php 

$connexion = mysqli_connect("localhost","root","", "emginfo");
$resultat = $connexion -> query("select * from produits");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="display:flex;">
    <div class="carte">
        Chiffre d'affaire
        X  &euro;
    </div>
    <div class="carte">
        Nombre de commandes
        Y 
    </div>
    <div class="carte">
        Nombre de clients
        Y 
    </div>
    
    </div>
    

    <table class="table">
        <tr>
            <th> Nom </th>
            <th> Prix</th>
            <th> Categorie</th>
            <th> action</th>
        </tr>


        <?php while ($ligne= $resultat -> fetch_array()) {?>
        <tr>
            <td><?php echo $ligne['nom'] ; ?></td>
            <td><?php echo $ligne['prix'] ; ?></td>
            <td><?php echo $ligne['categorie'] ; ?></td>
        </tr>
<?php  } ?>

    </table>
</body>
</html>