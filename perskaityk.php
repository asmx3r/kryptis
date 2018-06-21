<?php

class Perskaityk {

   public $gylis;
   public $tekstas;
   public $nuoroda;
   public $failas;

   public function __construct($gylis, $tekstas, $nuoroda, $failas)
   {
      $this->gylis = $gylis;
      $this->tekstas = $tekstas;
       $this->nuoroda = $nuoroda;
       $this->failas = $failas;
   }

   // vientisas masyvas
   public static function paimk() {
      $juosta = [];
      $db = Connection::getInstance();
      $sql = $db->query("SELECT gylis, tekstas, nuoroda, failas FROM meniu");
      //print_r($sql->fetchAll());
/*
      foreach ($sql->fetchAll() as $m) {
      $juosta[] = new Perskaityk($m['tekstas'], $m['nuoroda'], $m['failas']);
      print_r($juosta);
      }
*/
      $juosta = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $juosta;
   }


   // hierarchinis masyvas.
   public static function hierarchMeniu() {

      $masyvas = Perskaityk::paimk();
/*
      if (!isset($masyvas)) {
         die("_masyvas negavo duomenu is DB");
      }

      $masyvoIter = new RecursiveArrayIterator($masyvas);
      $iteriter = new RecursiveIteratorIterator($masyvoIter);
      if(!isset($iteriter)) {
         die("negauti duomenys is 'paimk()' funkcijos");
      }

      foreach ($iteriter as $key => $value) {
         $g = $iteriter->getDepth();
         echo "<p>gylis = $g, tipas = $key, pavadinimas = $value</p>";
      }
      return $g;
*/

      //$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($masyvas));
      $keys = array_keys($masyvas);
      for($i = 0; $i < count($masyvas); $i++){
         echo /*$keys[$i] .*/ " [<br>";
         foreach($masyvas[$keys[$i]] as $key => $value){
            echo " " . $key . " : " . $value . "<br>";
         }
         echo " ]<br>";
      }
/*      var_dump(iterator_to_array($iterator,true));
      $i = iterator_to_array($iterator,true);
      foreach($iterator as $key => $value) {
         $g = $iterator->getDepth();
         var_dump("<p>gylis = $g, tipas = $key, tekstas $value</p>");

      }
      return $g;
*/
   }

}
?>
