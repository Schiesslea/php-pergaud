<?php
$prixArticle= readline("Saisir le prix de l'article ");
if ($prixArticle<1000) {
    $reduction=$prixArticle/100*5;
    $prixArticle=$prixArticle*0.95;
    echo "La remise est de 5% soit ".number_format($reduction, 2, ",", " ")."euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de ".number_format($prixArticle, 2, ",", " "). " euros";
} elseif ($prixArticle>=5000) {
    $reduction=$prixArticle/100*20;
    $prixArticle=$prixArticle*0.80;
    echo "La remise est de 20% soit " .number_format($reduction, 2, ",", " "). "euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " .number_format($prixArticle, 2, ",", " "). " euros";
} else {
    $reduction=$prixArticle/100*10;
    $prixArticle=$prixArticle*0.90;
    echo "La remise est de 5% soit ".number_format($reduction, 2, ",", " ")."euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de " .number_format($prixArticle, 2, ",", " "). " euros";
}