<?php

echo "Bienvenue dans le jeu de devinette !
Le but du jeu est de deviner un nombre entre 1 et 100.
Vous avez entre 10 et 15 essais pour trouver le nombre.
Bonne chance !";
echo PHP_EOL;
$x=True;
while ($x==True){ //tant que x=True alors le programme fonctionne en boucle
    echo PHP_EOL;
    $menu = readline("1. Jouer
    2. Voir les résultats
    3. Voir les résultats d'un jour
    4. Voir les résultats d'un joueur
    5. Quitter
    Votre choix (1,2,3,4 ou 5) : ");

    $fichier = fopen("resultats.txt", "a+"); //ouvre le fichier resultats.txt en lecture et écriture seul(a+). Si le fichier n'existe pas, il tente de le créer


     if ($menu == 2) {      //cette condition permet de voir les résultats du fichier resultats.txt quand menu=2
        readfile("resultats.txt");
        echo PHP_EOL;

    } elseif ($menu == 3) {      //cette condition permet de voir seulement les résultats du fichier resultats.txt avec une date donnée quand menu=3
        $dateCherche= readline("Saisir une date (format d/m/Y) : ");
        while (($ligneDate=fgets($fichier))!=false) {
            if (substr_count($ligneDate,$dateCherche)) {
                echo PHP_EOL;
                echo "$ligneDate";
            }
        }
    } elseif ($menu == 4) {      //cette condition permet de voir seulement les résultats du fichier resultats.txt avec un pseudo donné quand menu=4
         $pseudoCherche = readline("Saisir un pseudo : ");
         while (($lignePseudo = fgets($fichier)) != false) {
             if (substr_count($lignePseudo, $pseudoCherche)) {
                 echo PHP_EOL;
                 echo "$lignePseudo";
             }
         }
     } elseif ($menu == 1) {      //cette condition permet de jouer au jeu à deviner quand menu=1
    $pseudo = readline("Saisir votre pseudo : ");
    $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
    $nbOrdinateur = random_int(1, 100);
    $nbtentative = random_int(10, 15);
    $compteur = 1;
    while ($nbUtilisateur<1 || $nbUtilisateur>100) {
        echo "Votre nombre n'est pas compris entre 1 et 100 !";
        echo PHP_EOL;
        $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
    }
    while ($nbUtilisateur != $nbOrdinateur && $compteur<$nbtentative ) {
        if ($nbUtilisateur<$nbOrdinateur) {
            $compteur+=1;
            echo "Le nombre que vous avez saisi est trop petit ";
            echo PHP_EOL;
            $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
        } elseif ($nbUtilisateur>$nbOrdinateur) {
            $compteur+=1;
            echo "Le nombre que vous avez saisi est trop grand ";
            echo PHP_EOL;
            $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
        }
    }
    if ($compteur <= 10 && $nbUtilisateur == $nbOrdinateur) {
        echo "Excellent $pseudo : vous avez trouvé le nombre $nbOrdinateur en $compteur tentatives !";
        echo PHP_EOL;
        fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Excellents ! Vous avez trouvé le nombre en $compteur essais.\n");
    } elseif ($compteur > 10 && $nbUtilisateur == $nbOrdinateur) {
        echo "Bien joué $pseudo : vous avez trouvé le nombre $nbOrdinateur en $compteur tentatives !";
        echo PHP_EOL;
        fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Bien joué ! Vous avez trouvé le nombre en $compteur essais.\n");
    } elseif ($compteur == $nbtentative && $nbUtilisateur != $nbOrdinateur) {
        echo "Désolé $pseudo : vous avez atteint le nombre maximum de tentatives ! Le nombre était $nbOrdinateur";
        fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Perdu ! Le nombre à deviner était $nbOrdinateur.\n");
        echo PHP_EOL;
    }

    } elseif ($menu == 5){
        $x=False; //x est donc égale à False, donc la boucle while(x==True) renvoie False, on sort alors de la boucle while
        die(); //arrête le programme

     } else { // si un autre nombre est choisi, le programme indique qu'il faut choisir entre 1 et 5, le programme va donc ensuite afficher le menu
         echo PHP_EOL;
         echo "Veuillez choisir 1,2,3,4 ou 5 !";
         echo PHP_EOL;
     }
}


