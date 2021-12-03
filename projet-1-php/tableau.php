<?php
$participants=["TOKPODOUNSI", "TREKPO","DANGBOE"];
echo $participants[0];

?>
<?php
$notes=["biologie"=>18,"droitdelhomme"=>14,"relationinternationale"=>16];
echo "ma note en biologie".$notes["biologie"];
echo "ma note en relationinternationale".$notes["relationinternationale"];
echo "ma note en droitdelhomme".$notes["droitdelhomme"];
?>

<?php
$moy = $notes["biologie"] + $notes["relationinternationale"]+$notes["droitdelhomme"];
echo $moy;

?>
// "on a deux types de tableaux, associatif et indexé
les tableaux associatifs sont plus faciles à manipuler";