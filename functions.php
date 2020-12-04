<?php
//function displayItem1 qui affiche le prix, le nom, la photo de l'article 1//
function displayItem1(){
    $article_1=[
        $nom="Pampers pour les chiens",  
        $prix=19.99,
        $photo= "<img src=\"pampers.jpg\" alt=/>",  
    ];
    echo $nom, $prix,$photo ;  
}

function displayItem2(){
     $article_2=[
        $nom="Manteau contre la pluie",  
        $prix=12.99,
        $photo= "<img src=\"manteau.jpg\" alt=/>",
     ]; 
     echo $nom, $prix,$photo ;  
}

function displayItem3(){
     $article_3=[
        $nom="Chaussures de protection",  
        $prix=17.99,
        $photo= "<img src=\"chaussures.jpg\" alt=/>",
     ];  
     echo $nom, $prix,$photo ; 
}


?>



