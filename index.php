<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les tableaux Exercice 7</title>
  </head>
  <body>
    <?php
      //  => = associe un index à une valeur exemple : Nom => Cremefraiche
      $department = array('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme');
      // Ajoute département 51 avec comme valeur Reims à la fin du tableaux
      $department[51] = 'Reims';
      // Affiche la valeur de l'index 59
      print_r($department);
     ?>
  </body>
</html>
