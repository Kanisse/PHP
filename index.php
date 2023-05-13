
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

    <table class="table">
        <tr>
            <th> Nom </th>
            <th> Prix</th>
            <th> Categorie</th>
            <th> action</th>
        </tr>


        <?php 
        $connexion = mysqli_connect("localhost","root","", "emginfo");
        $resultat = $connexion -> query("select * from produits");
        $nbr= $connexion -> query("select count('nom') as nbr from produits");
        $ligne0= $nbr -> fetch_array();
        $resultat2= $connexion -> query("select sum(price) as somme from produits");
        $ligne1= $resultat2 -> fetch_array();
        while ($ligne= $resultat -> fetch_array()) {?>
        <tr>
            <td><?php echo $ligne['nom'] ; ?></td>
            <td><?php echo $ligne['price'] ; ?></td>
            <td><?php echo $ligne['categorie'] ; ?></td>
        <td> 
            <button> Supprimer</button>
            <button>Modifier</button>
    </td>

        </tr>
<?php  } ?>

    </table>

    <div style="display:flex; margin:auto; width: 80%;">
    <div class="carte">
        Nombre de produits <br>
        <?php echo $ligne0['nbr']; ?>
    </div>
    <div class="carte">
        Somme des prix
        <?php echo $ligne1['somme']; ?>
    </div>
    <div class="carte">
        Nombre de clients
        Y 
    </div>
    
    </div>
 
</body>
</html>