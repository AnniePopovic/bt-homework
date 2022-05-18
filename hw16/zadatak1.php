<?php
$array= array("annie@gmail.com","Mirko","Pera","pera@gmail.com");
function prikažiMejl($niz) {
for ($i=0;$i<count($niz);$i++) {
if (strpos($niz[$i], "@") == true) {
    echo $niz[$i] . "<br>";
}
}
}
prikažiMejl($array);
?>