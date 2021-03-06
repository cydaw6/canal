<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Site web - Canal du Midi</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/language.css">
  <link rel="stylesheet" href="css/slideshow.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
</head>

<body>
  <div id="container">
    <?php
    include('includes/header.php');

    // statistiques
    $query_count = $db->query("SELECT compteur FROM stats WHERE page=\"histoire\";")->fetch();
    $count = $query_count["compteur"];
    $db->query("UPDATE stats SET compteur=$count+1 WHERE page=\"histoire\";");
    ?>

    <?php include('includes/menu.php'); ?>

    <div class="left">
      <div class="box_left">
        <?php
        if ($_SESSION["lang"] == "en") {
        ?>
          <div class="box_title">History</div>
          <div>

            <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1yKctDhDbvetccU06hBtzabNwxzthHLNnHuIYcLbuXb4&font=Default&lang=en&initial_zoom=5&width=100%&height=100%' width='100%' height='900px' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
          <?php
        } elseif ($_SESSION["lang"] == "fr") {
          ?>
            <div class="box_title">Histoire</div>
            <div>
              <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1PPw-xPYOxIyyWKbhg2-iR-suQlJ2D1rqmD95vQWxC-4&font=Default&lang=fr&initial_zoom=1&width=100%&height=100%' width='100%' height='900px' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
            <?php
          } elseif ($_SESSION['lang'] == "es") {
            ?>
              <div class="box_title">Historia</div>
              <div>
                <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1O9fKankY8C0d6N8fXH4a6InWiwYi_i7NodHkFTRVg-w&font=Default&lang=es&initial_zoom=2&height=100%' width='100%' height='900px' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>

              <?php
            }
              ?>
              </div>

            </div>
          </div>
          <div class="right">
            <div class="box_right">


              <div class="box_title black">
                <?php
                if ($_SESSION["lang"] == "en") {
                  echo "Want to know more?";
                } elseif ($_SESSION["lang"] == "fr") {
                  echo "Vous voulez en savoir plus ?";
                } elseif ($_SESSION["lang"] == "es") {
                  echo "¿Quieres saber más?";
                }
                ?>
              </div>
              <center><br>
                <?php
                if ($_SESSION["lang"] == "en") {
                  echo "<a href=\"https://fr.wikipedia.org/wiki/Canal_du_Midi\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/220px-Wikipedia-logo-v2.svg.png\" style=\"width:90px;\"></a><br>
              More details on the Wikipedia page labeled <b>\"quality article\"</b> !";
                } elseif ($_SESSION["lang"] == "fr") {
                  echo "<a href=\"https://fr.wikipedia.org/wiki/Canal_du_Midi\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/220px-Wikipedia-logo-v2.svg.png\" style=\"width:90px;\"></a><br>
              Plus de détails sur la page Wikipédia classée <b>\"article de qualité\"</b> !";
                } elseif ($_SESSION["lang"] == "es") {
                  echo "<a href=\"https://fr.wikipedia.org/wiki/Canal_du_Midi\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Wikipedia-logo-v2.svg/220px-Wikipedia-logo-v2.svg.png\" style=\"width:90px;\"></a><br>
              Más detalles en la página de Wikipedia clasificada como un  <b>\"artículo de calidad\"</b> !";
                }
                ?>
              </center>
            </div>

            <br>

            <div class="box_right">
              <div class="box_title black"><?php
                                            if ($_SESSION["lang"] == "fr") {
                                              echo "Une image de notre galerie";
                                            } else if ($_SESSION["lang"] == "en") {
                                              echo "An image from our gallery";
                                            } else if ($_SESSION["lang"] == "es") {
                                              echo "Una imagen de nuestra galería";
                                            }
                                            ?></div>


              <center>
                <iframe src="includes/iframe_galerie.php" scrolling="no" frameborder="0"></iframe>
                <hr>
                <a href="galerie.php">
                  <?php
                  if ($_SESSION["lang"] == "fr") {
                    echo "Voir notre galerie";
                  } else if ($_SESSION["lang"] == "en") {
                    echo "See our gallery";
                  } else if ($_SESSION["lang"] == "es") {
                    echo "Vea nuestra galería";
                  }
                  ?></a>
              </center>
            </div>

            <br>

            <div class="box_right">
              <div class="box_title black"><?php
                                            if ($_SESSION["lang"] == "fr") {
                                              echo "Nos réseaux sociaux";
                                            } else if ($_SESSION["lang"] == "en") {
                                              echo "Our social medias";
                                            } else if ($_SESSION["lang"] == "es") {
                                              echo "Nuestras redes sociales";
                                            }
                                            ?></div>

              <center style="margin-top:5px;">
                <a href="https://www.facebook.com/Canal-du-Midi-M%C3%A9diation-Culturelle-et-Num%C3%A9rique-106766767743771" target="_blank" class="socialmedia"><i class="devicon-facebook-plain" style="font-size:34px;"></i></a>
                <a href="https://twitter.com/DuCulturelle" target="_blank" class="socialmedia"><i class="devicon-twitter-plain" style="font-size:30px;"></i></a>
              </center>
            </div>
          </div>


          <div class="clear"></div>


          <?php include("includes/footer.php"); ?>