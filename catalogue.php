<?php
include ("functions.php");
?>

<?php
//3 tableaux:arrays with keys (associatifs).Chaque article est découpé en sous-éléments.//



$list_articles=array($article_1,$article_2,$article_3);
    foreach($list_articles as $article) {
        DisplayItem($article["nom"],$article["prix"],$article["photo"]);
}

?>
