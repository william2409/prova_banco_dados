<?php

$p[0]["nome"] = "Ribamar";
$p[0]["idade"] = 31;
$p[1]["nome"] = "Joaquim";
$p[1]["idade"] = 26;
$p[2]["nome"] = "Manoel";
$p[2]["idade"] = 44;
$p[3]["nome"] = "Sebastiao";
$p[3]["idade"] = 18;

$i = -1;
$c = -1;

foreach ($p as $id => $s)  {

    if($s["idade"]>$i){
        $i = $s["idade"];
        $c = $id;

    }

}

echo $p[$c]["nome"];

?>
