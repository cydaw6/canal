<?php

    /**
     * Minimal class autoloader
     *
     * @param string $class Full qualified name of the class
     */
    function miniAutoloader($class)
    {
        $class = str_replace('\\', '/', $class);
        require __DIR__ . '/includes/' . $class . '.php';
    }

    // If the Composer autoloader exists, use it. If not, use our own as fallback.
    $composerAutoloader = __DIR__.'/../vendor/autoload.php';
    if (is_readable($composerAutoloader)) {
        require $composerAutoloader;
    } else {
        spl_autoload_register('miniAutoloader');
    }

use Translate\Translator;
use Translate\Exception;

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Site web - Canal du Midi</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/language.css">
  <link rel="stylesheet" href="css/slideshow.css">
</head>

<body>
  <div id="container">

    <?php
    include('includes/header.php');
    include('includes/menu.php');
    //ON RECUP LA TRAD DE LA PAGE
    $contenuArticle = $db->query("SELECT * FROM p_article");
    $txt = $contenuArticle->fetchAll();

    // statistiques
    $query_count = $db->query("SELECT compteur FROM stats WHERE page=\"articles\";")->fetch();
    $count = $query_count["compteur"];
    $db->query("UPDATE stats SET compteur=$count+1 WHERE page=\"articles\";");

    $article = $db->query("SELECT * FROM articles");
    ?>

    <div class="left">
      <div class="box_left">
        <div class="box_title"><?php echo $txt[0][$_SESSION["lang"]]; ?></div>

        <?php while ($results = $article->fetch()): ?>
        <div class="article_summup">
          <div class="left">

            <?php
            $lang = $_SESSION["lang"];
            if ($lang != "fr"){ // si le site n'est pas en version française
              try {
                        $key = KEY_TRANSLATION;
                        $translator = new Translator($key);
                        $titre = html_entity_decode($results["titre"]);
                        $titre = $translator->translate($titre, "fr-$lang");
                      } catch (Exception $e) {
                        // handle exception
              }
            } else {
              $titre = $results["titre"];
            }

            ?>


            <h1><?php echo $titre; ?></h1><br>
            <span><?php echo $txt[4][$_SESSION["lang"]]; ?> <b><?php echo edit_date_format($results["date"]); ?></b></span>
          </div>

          <div class="right">
            <a href="voir_article.php?id=<?php echo $results["id"]; ?>" class="bouton green"><?php echo $txt[6][$_SESSION["lang"]]; ?></a>
          </div>
          <div style="clear:both;"></div>
        </div>
        <?php endwhile; ?>

      </div>
    </div>
    <div class="right">
      <div class="box_right">


        <div class="box_title black">categ</div>

        <center>
          test
        </center>
      </div>
    </div>


    <div class="clear"></div>


    <?php include("includes/footer.php"); ?>