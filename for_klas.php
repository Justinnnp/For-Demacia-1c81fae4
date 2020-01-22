
<?php
$array = array("Jan Janssen", "Jaap Visser", "Lot de Boer", "Sam van Wijk", "Daan Mandemaker");

$totaalElementen = count($array);
for ($i = 0; $i < $totaalElementen; $i++) {
    echo($array[$i]);
    if ($i < $totaalElementen -1 ) echo " " .PHP_EOL;
}
?>



