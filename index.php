<?php
// Tirage du loto
define("MAXI", 7);
$vecteurLoto=array();
// Nettoyer grille
for ($i=0 ; $i <= MAXI -1; $i++){
  $vecteurLoto[$i] = 0;
} // FINPOUR
// Remplir vecteurLoto
for ($i=0 ; $i <= MAXI -1 ; $i++) {
	
	
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<link rel="icon" href="./images/loto.bmp" />
<title>Easy Loto</title>
<link rel="stylesheet" type="text/css" href="./css/loto.css" />
</head>
<body>
<h1>Easy Loto</h1>
<div id="global">
  <form method="post" action="index.php" name="tire" id="tire">
    <ul id="boules">
      <li><img src='images/ico-boule.png' alt=''/> 12 </li>
      <li><img src='images/ico-boule.png' alt=''/> 21 </li>
      <li><img src='images/ico-boule.png' alt=''/> 13 </li>
      <li><img src='images/ico-boule.png' alt=''/> 26 </li>
      <li><img src='images/ico-boule.png' alt=''/> 8 </li>
      <li><img src='images/ico-boule.png' alt=''/> 45 </li>
      <li><img src='images/ico-boule.png' alt=''/> 48 </li>
      <li>
        <input type="submit" name="send" value="Tirage du Loto virtuel" />
      </li>
    </ul>
    <!-- FIN boules -->
    <div class="clear"></div>
    <div class="bottom"> SI6 </div>
  </form>
</div>
</body>
</html>