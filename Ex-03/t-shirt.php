<html>
    <head>
        <title>Exo 3</title>
    </head>
    <body>
        <?php 
          $nom_produit = 't-shirt simple';
          $couleur ='blanc';
          $prix = 10.50;
          $disponible = 'true';
          $quantité=10;
        
          echo "Le nom du produit est $nom_produit"; 
          echo "La couleur du produit est $couleur";
        ?>
        <h3>
            <?php
           echo $phrase1 ='le nom du produit est t-shirt simple';
            echo $phrase2='il reste 10 produits en stock';
           echo $phrase3='le produit t-shirt simple est de couleur blanche';
            ?>
            </h3>

        <h4>
            <?php
           echo $phrase1='acheter 3 produits couterait 31,50';
          echo  $phrase2='Acheter la totalité des produits couterait 105';
           echo $phrase3='si 3 produits sont vendus';
            ?>
            </h4>
        <p>    
            <?php
          if  ($disponible = true) echo "le produit est disponible en ligne" ;
            if ($disponible = false) echo "le produit t-shirt simple n est malheureusement plus disponible en ligne";
            ?>
            </p>
        <p>
            <?php
           if ($quantité>5) echo"Il reste 5 en magasin";
            if ($quantité<5) echo "Il reste 3 en magasin";
            if ($quantité=1) echo "il reste un produit en magasin";
           if ($quantité=0) echo "il ne reste plus de produits en magasin";
            ?>
            </p>
    </body>
</html>
