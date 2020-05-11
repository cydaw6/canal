<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Site web - Canal du Midi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/language.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div id="container">

        <?php
        include('includes/header.php');
        include('includes/menu.php');
        //ON RECUP LA TRAD DE LA PAGE
        $qFiche = $db->query("SELECT * FROM fiches WHERE tag=\"logement\"; ");


        // statistiques
        $query_count = $db->query("SELECT compteur FROM stats WHERE page=\"logement\";")->fetch();
        $count = $query_count["compteur"];
        $db->query("UPDATE stats SET compteur=$count+1 WHERE page=\"logement\";");
        ?>

        <div class="left">
            <div class="box_left">
                <div class="box_title"><?php echo 'Logements'; ?></div>

                <div class="c1">
                    <br>
                    <div id="lovely-things-list">
                        <input class="search" placeholder="Chercher" />
                        <ul class="sort-by">
                            <li class="sort btn" data-sort="name">Sort by name</li>
                            <li class="sort btn" data-sort="category">Sort by category</li>
                        </ul>
                        <ul class="filter">
                            <li class="btn" id="filter-none">Show all</li>
                            <!--
                            <li class="btn" id="filter-games">Only show games</li>
                            <li class="btn" id="filter-beverages">Only show beverages</li> 
                        -->
                        </ul>
                        <ul class="list">
                            <?php while ($f = $qFiche->fetch()) {
                                //on utilisera le <a></a> pour faire passer en post l'id de la fiche de laquelle on souhaite voir sa description
                                echo '<li>
                                    <img src="' . $f['miniature'] . '"class="thumb">
                                    <a href="fiche.php?id=' . $f['id'] . '"><h4><span  class="name">' . $f['titre'] . '</span> <span class="category">' . $f["tag"] . '</span></h4></a>
                                    <p class="description">' . $f["adresse"] . '<br>' . $f["code_postal"] . ' ' . $f["localite"] . '</p>
                                    </li>';
                            }

                            ?>

                        </ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="right">
            <div class="box_right">
                <div class="box_title black"><?php echo 'Auké'; ?></div>

                <center>

                </center>
            </div>
        </div>



        <div class="clear"></div>

        <?php include("includes/footer.php"); ?>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.0.0/list.min.js'></script>
        <script src="./js/table.js"></script>