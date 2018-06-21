<?php
   $e = null; // klaidos tekstas bus cia

         require('config.php');
         require('connection.php');
         require('perskaityk.php');
/*
   $prisijunk = new Connection();

   if (!isset($prisijunk)) {
      $e = "Connection klase neatiduoda atsakymo";
   }
*/
   $paimki = Perskaityk::paimk();
/*   if (!isset($paimki)) {
      die("paimk() funkcija neveikia");
   }

$hierarchija = Perskaityk::hierarchMeniu();
 if (!isset($hierarchija)) {
      $e = "Perskaityk klase neatiduoda atsakymo";
}
*/
?>

<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <nav>
      <h5>Vientisas masyvas</h5>
         <p><?php print_r($paimki);?></p>
      <h5>Hierarchinis masyvas</h5>
         <p><?php Perskaityk::hierarchMeniu();?></p>
   </nav>
   <?php require('lentele.html');?>
</body>
