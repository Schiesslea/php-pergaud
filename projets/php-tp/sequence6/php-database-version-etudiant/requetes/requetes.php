<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];
    foreach ($tableArticle as $id => $resultat) {
        ["titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation, "actif"=>$actifs] = $resultat;
        if ($actifs) {
            array_push($resultats, $id, $titre, $contenu, $date_creation);
        }
    }
    return $resultats;
}

/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticledonne(array $tableArticle, string $categorieId) : array {
    $resultats = [];
    foreach ($tableArticle as $id => $resultat) {
        ["titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation, "id_categorie"=>$id_categorie] = $resultat;
        if ($id_categorie == $categorieId) {
            array_push($resultats, $id, $contenu, $date_creation);
        }
    }
    return $resultats;
}

/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticles (array $tableArticle, array $tableCategorie) : array {
    $resultats =[];
    foreach ($tableArticle as $id => $resultat) {
        ["titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation, "id_categorie"=>$id_categorie] = $resultat;
        foreach ($tableCategorie as $idCategorie => $nom) {
            foreach ($nom as $categorie) {
                if ($id_categorie == $idCategorie) {
                    array_push($resultats, $id, $contenu, $date_creation, $categorie);
                }
            }
        }
    }
    return $resultats;
}

    /* Requête R4
     * Récupérer les articles dont la date de création est supérieure à une date donnée
     * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
     * chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticlesDate (array $tableArticle, array $tableAuteur, string $date) : array {
    $resultats =[];
    foreach ($tableArticle as $id => $resultat) {
        ["titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation, "id_auteur"=>$id_auteur] = $resultat;
        foreach ($tableAuteur as $idAuteur => $auteur) {
                if ($id_auteur == $idAuteur) {
                    $date_creation = DateTime::createFromFormat('dd-mm-YYYY', $date_creation);
                    $date = DateTime::createFromFormat('dd-mm-YYYY', $date);
                    if ($date_creation > $date) {
                        array_push($resultats, $id, $titre, $contenu, $date_creation, $idAuteur, $auteur);
                    }

                }
        }
    }
    return $resultats;
}


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererArticlesOrdonnes($tableArticle, $tableCategorie)
{
    $articlesOrdonnes = $tableArticle;

    // Utilisation de la fonction usort pour trier les articles par titre
    usort($articlesOrdonnes, function ($a, $b) {  //trie le tableau par ordre croissant
        return strcmp($a['titre'], $b['titre']);  //compare les valeurs
    });

    $resultats = [];

    foreach ($articlesOrdonnes as $article) {
        $idCategorie = $article['id_categorie'];
        $categorie = $tableCategorie[$idCategorie];

        // Ajouter les résultats à la liste
        $resultats[] = [
            'id_article' => $article['id_article'],
            'titre' => $article['titre'],
            'date_creation' => $article['date_creation'],
            'libelle_categorie' => $categorie['libelle'],
        ];
    }

    return $resultats;
}


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION
function nombreArticlesParIdAuteur($idAuteur, $tableArticle)
{
    $nombreArticles = 0;

    foreach ($tableArticle as $article) {
        if ($article['id_auteur'] == $idAuteur) {
            $nombreArticles++;
        }
    }

    return $nombreArticles;
}

/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
function nombreArticlesParAuteur($tableArticle, $tableAuteur)
{
    $resultats = [];

    foreach ($tableAuteur as $idAuteur => $auteur) {
        $nombreArticles = 0;

        foreach ($tableArticle as $article) {
            if ($article['id_auteur'] == $idAuteur) {
                $nombreArticles++;
            }
        }

        // Ajouter les résultats à la liste
        $resultats[] = [
            'id_auteur' => $idAuteur,
            'prenom' => $auteur['prenom'],
            'nom' => $auteur['nom'],
            'nombre_articles' => $nombreArticles,
        ];
    }

    return $resultats;
}
