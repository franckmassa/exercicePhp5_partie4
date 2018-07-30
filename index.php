<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice5</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la fonction concaténation d'un nombre et d'une chaine de caractères
    //et retourne la contaténation
    function conca($number, $chain){
      return $number. '<br/>'. $chain;
    }
    //Affichage du nombre et de la chaine de caractères
    echo conca(5, 'Bonjour');
    ?>
  </p>
</body>
</html>
