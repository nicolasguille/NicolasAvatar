<?php

include 'vendor/autoload.php';

$tableau = ["purple","yellow"];
$tab =[];


//trouver une fontion en php pour tirer un entier aleatoire entre 2 borne
 
$size = 5;

for($o=0;$o<$size;$o++) {

$colors =[];

   for($i=0;$i<$size;$i++) {
    $indice = mt_rand(0,count($tableau)-1);


    $couleur = $tableau[$indice];
       
       $colors[] =$couleur;
   }
   
   array_push($tab,$colors);
}
/*dump($tab);*/

echo  '<svg width="500" height="500">';

$posX= 0;
$posY=0;

foreach($tab as $ligne) {
  

   foreach($ligne as $couleur){
     echo '<rect x="'.$posX.'" y="'.$posY.'"  width="100" height="100" fill="'.$couleur.'" />';
     $posX +=100;
   }
   $posY+=100;
   $posX=0;
}
echo '</svg>';






?> 
