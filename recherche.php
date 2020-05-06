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
    $contenuIndex = $db->query("SELECT * FROM p_recherche");
    $txt = $contenuIndex->fetchAll();
    ?>

    <div class="left">
      <div class="box_left">
        <div class="box_title"><?php echo $txt[0][$_SESSION["lang"]]; ?></div>
        <h2><span style="font-weight: 200;"><span style="font-weight: 400;"></span><?php echo $txt[1][$_SESSION["lang"]]; ?></span></h2>
        <hr>

        <?php if (!isset($_GET["search"])) {
          echo "<p>";
          echo $txt[2][$_SESSION["lang"]];
          echo "</p>";
        } else {

          if (empty($_GET["search"])) {
            echo "<p>";
            echo $txt[3][$_SESSION["lang"]];
            echo "</p>";
          } else {

            echo "<p>gg wp</p>";
          }
        } ?>


      </div>
    </div>
    <div class="right">
      <div class="box_right">


        <div class="box_title" style="
    background: rgb(66,66,66); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(66,66,66) 0%, rgb(51,51,51) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(66,66,66) 0%,rgb(51,51,51) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(66,66,66) 0%,rgb(51,51,51) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    border-bottom: 3px solid rgb(38, 38, 38);">categ</div>

        <center>
          test
        </center>
      </div>
    </div>


    <div class="clear"></div>


    <?php include("includes/footer.php"); ?>