<?php
function Operacija($niz,$operater="+") {
  if ($operater==="+") {
    $sabiranje=0;
      foreach($niz as $element) {
      $sabiranje+=$element;
      } return $sabiranje;
} else if ($operater==="-") {
    $oduzimanje=0;
     foreach($niz as $element) {
      $oduzimanje-=$element;
      }
      return $oduzimanje;
} else if ($operater==="*") {
    $množenje=1;
     foreach($niz as $element) {
      $množenje*=$element;
      }
      return $množenje;
} else if ($operater === "/") {
    $deljenje=$niz[0];
     for($i=1;$i<count($niz);$i++) {
      $deljenje/=$niz[$i];
      }
      return $deljenje;
} 
}


$array= array(3,50,12,-4);
echo Operacija($array) . "<br>";
echo Operacija($array, "-") . "<br>";
echo Operacija($array, "*") . "<br>";
echo Operacija($array, "/");

?>