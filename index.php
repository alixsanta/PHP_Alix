<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>premier programme php</h1>
    <?php
// afficher du texte :
    echo "HELLO WORLD";
    echo '<br>';
//     Exercice 1 :
// -Créer une variable de type int avec pour valeur 5,
// -Afficher le contenu de la variable (utilisation de la fonction php echo),
// -Afficher son type (utilisation de la fonction php gettype),
// -Créer une variable de type String avec pour valeur votre prénom,
// -Afficher le contenu de la variable (utilisation de la fonction php echo),
// -Créer une variable de type booléen avec pour valeur false,
// -Afficher son type (utilisation de la fonction php gettype).
    $nbr = 5;
    echo $nbr;
    echo gettype($nbr);
    echo '<br>';

    $prenom = 'alix';
    echo $prenom;
    echo '<br>';

    $boolean = false;
    echo gettype($boolean);
    echo '<br>';


// EXO opérateur
// -Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
// -Stocker le résultat de l’addition de $a et $b dans une variable $total,
// -Afficher le résultat (utilisez la fonction echo)
    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo "le résultat est : $total";    
    echo '<br>';

    $nbr1 = 5;
    $nbr2 = 3;
    $nbr3 = $nbr1 + $nbr2;
    echo " les valeurs de mes variables sont : $nbr1, $nbr2 et $nbr3.";
    echo '<br>';
    $nbr1 -= 3;
    echo "$nbr1<br>";
    $nbr3 = $nbr2 - $nbr1;
    echo $nbr3;

//    EXO
//   -Ecrire une fonction qui prend en paramètre (le prix HT d’un article, le nombre d’articles et le taux de TVA)
//    et qui retourn le prix total TTC correspondant.
//   -Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
//   -Afficher le résultat (utilisez la fonction echo).
function article($prixHt, $nbr, $tva){
    $prixTtc = ($nbr + $prixHt * $tva) / 100;
    return $prixTtc;
};

$prixHt = 10;
$nbr = 2;
$tva = 0.5;
echo "nous avons $nbr articles au prix ht de $prixHt € et au prix ttc de article($prixHt, $nbr, $tva) <br>";
    

// Exercice 1 test :
// Exercice 1 :
// -Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).
    function test($nbr){
        if($nbr<0){
            echo "le nombre est négatif <br>";
        }
        else if($nbr==0){
            echo "le nombre est 0";
        }
        else{
            echo "le nombre est positif";
        }
    };
    
    test(-351);

//     Exercice 2 :
// -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).
function plusGrand($nbr1, $nbr2, $nbr3){
    if($nbr1>$nbr2 AND $nbr1>$nbr3){
        echo "$nbr1 est le plus grand des 3";
    }
    else if($nbr2>$nbr3){
        echo "$nbr2 est le plus grand des 3";
    }
    else{
        echo "$nbr3 est le plus grand des 3";
    }
}
function plusPetit($nbr1, $nbr2, $nbr3){
    if($nbr1<$nbr2 AND $nbr1<$nbr3){
        echo "$nbr1 est le plus petit des 3";
    }
    else if($nbr2<$nbr3){
        echo "$nbr2 est le plus petit des 3";
    }
    else{
        echo "$nbr3 est le plus petit des 3";
    }
}
function moyenne($nbr1, $nbr2, $nbr3){
    return ($nbr1+$nbr2+$nbr3)/3;
}
plusGrand(14,16,18);
echo '<br>';
plusPetit(14,16,18); 
echo '<br>';
echo 'la moyenne est égale à : '.moyenne(14,25,53).'';
echo '<br>';

// Exercice 4:
// -Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans la page web) :
// • "Poussin" de 6 à 7 ans
// • "Pupille" de 8 à 9 ans
// • "Minime" de 10 à 11 ans
// • "Cadet" après 12 ans
// Bonus : Refaire l’exercice en utilisant le switch case.
function valeur($age){
    if($age >= 6 and $age <=7){
        echo "c'est la catégorie poussin";
    }
    else if($age >= 8 and $age <=9){
        echo "c'est la catégorie pupille";
    }
    else if($age >=10 and $age <=11){
        echo "c'est la catégorie Minime";
    }
    else if($age>12){
        echo "c'est la catégorie cadet";
    }
};
valeur(8);
echo '<br>';


function value($age){
    switch($age){
        case $age >=6 and $age<=7 :
        echo "c'est la catégorie poussin";
        break;
        case $age >=8 and $age<=9 :
        echo "c'est la catégorie pupille";
        break;
        case $age >=10 and $age<=11 :
        echo "c'est la catégorie Minime";
        break;
        case$age >=12 :
        echo "c'est la catégorie cadet";
        break;
    }
};

value(12);
echo '<br>';

// Exercice 2 :
// Ecrire une fonction qui prend un nombre en paramètre (variable $nbr), et qui ensuite affiche les dix nombres suivants.
// Par exemple, si la valeur de nbr équivaut à : 17, la fonction affichera les nombres de 18 à 27 (méthode echo).
// Bonus :
// Exercice créer un tableau de 10 colonnes (en utilisant un boucle) -> chaque colonne la valeur de l'index +1, 
function plus($nbr){
    for($i=0; $i<=10; $i++){
        echo $nbr + $i;
        // ou $nbr ++;
        echo '<br>';
        };
};
plus(17);

$nbr1= [];
function tab1($nbr1){
    for($i=0; $i<11; $i++){
        echo $nbr1 + $i;
        echo '<br>';
    };
};
tab1(1);

// correction bonus 1 :
$tab = array();
    $tab2 = [];
    for($i = 0; $i < 10; $i++){
        $tab[$i] = $i;
    }
    //afficher le détail du tableau
    var_dump($tab);

// Bonus 2 :
// créer un tableau de 10 colonnes avec un nombre aléatoire comprit entre (10, 30).
 //création du tableau
$tab2 = array();
 //boucle pour ajouter 10 colonnes
for($i = 0; $i < 10; $i++){
     //ajout d'un nombre aléatoire en 10 et 30 à chaques tours
    $tab2[$i] = rand(10, 30);
}
 //afficher le détail du tableau
var_dump($tab2);

// Exercice 1 :
// -Créer une fonction qui affiche la valeur la plus grande du tableau.
// $tab = array(10, 25,6,33, 58,1,49,110);
$tabV = array(10, 25, 6, 33, 58, 1, 49, 110);
function tab2($tabV){
    for($i = 0; $i < length; $i++){
        value>length;
        
    }
}
    ?>
</body>
</html>