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
      <?php include('includes/header.php'); ?>

      <?php include('includes/menu.php'); ?>

<style>
.profile_picture{
  width: 174px;
  height:230px;
  display: inline-block;
  border: 2px solid black;
  margin: 5px auto;
  box-shadow: 0px 2px 3px 0px black;
}
.label_picture {
  margin: 5px auto;
  width: 174px;
  display: inline-block;
  font-weight: bold;
}
.label_role {
  margin: 5px auto;
  width: 174px;
  display: inline-block;
  font-style: italic;
  font-size: 15px;
}
</style>

<div class="left">
<div class="box_left">
	<div class="box_title">Qui sommes-nous ?</div>

<center>
<div class="profile_picture">
  <!-- easter egg https://cdn.discordapp.com/attachments/648445316269342721/662363770164871181/IMG_0175.JPG -->
  <img src="img/brian.jpg" style="height:230px;width:174px;" alt="">
</div>

<div class="profile_picture">
  <img src="img/jeremy.jpg" style="height:230px;width:174px;" alt="">
</div>

<div class="profile_picture">
  <img src="img/timothee.jpeg" style="height:230px;width:174px;" alt="">
</div>

<div class="profile_picture">
  <img src="img/antoine.jpg" style="height:230px;width:174px;" alt="">
</div>
<br>
<div class="label_picture">Brian BABILLON&nbsp;<a href="https://www.linkedin.com/in/brian-babillon-328a021a4/" target="_blank"><img src="img/linked_in_16.png" style="vertical-align: text-bottom;"></a></div>
<div class="label_picture">Jeremy GONTHIER&nbsp;<a href="https://www.linkedin.com/in/jeremy-gonthier-b2591a1a0/" target="_blank"><img src="img/linked_in_16.png" style="vertical-align: text-bottom;"></a></div>
<div class="label_picture">Timothée LEFEBVRE&nbsp;<a href="https://www.linkedin.com/in/timoth%C3%A9e-lefebvre77/" target="_blank"><img src="img/linked_in_16.png" style="vertical-align: text-bottom;"></a></div>
<div class="label_picture">Antoine BASTOS&nbsp;<a href="https://www.linkedin.com/in/antoineba6/" target="_blank"><img src="img/linked_in_16.png" style="vertical-align: text-bottom;"></a></div>

<div class="label_role">Chef de projet</div>
<div class="label_role">Chargé de communication</div>
<div class="label_role">Chargé de développement</div>
<div class="label_role">Recherche de contenu</div>

</center>

<h2>Présentation</h2>
<p>
Nous sommes 4 étudiants en DUT Informatique à l'Université Gustave Eiffel se situant à Champs-sur-Marne (77420) qui travaillent sur projet initié par notre professeur de communication dans le cadre des projets tutorés.
Nous avons pour but de développer ce site afin qu'il puisse renseigner au mieux le visiteur sur le Canal du Midi.
<br>
Ce projet a nécessité un travail sur toute notre première année de DUT Informatique.
</p>

</div>
</div>
<div class="right">
  <div class="box_right">


    <div class="box_title" style="
    background: rgb(66,66,66); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(66,66,66) 0%, rgb(51,51,51) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(66,66,66) 0%,rgb(51,51,51) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(66,66,66) 0%,rgb(51,51,51) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    border-bottom: 3px solid rgb(38, 38, 38);"
    >Notre université</div>
<center>
  <a href="https://www.univ-gustave-eiffel.fr/" target="_blank"><img src="img/logo_univ_gustave_eiffel_bleu.png" style="margin:5px;width:250px;" alt=""></a>
  <br>
  <i>Université Gustave Eiffel</i>
</center>
    </div>
</div>


<div class="clear"></div>

<?php include("includes/footer.php"); ?>