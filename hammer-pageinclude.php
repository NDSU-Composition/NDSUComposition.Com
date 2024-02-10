<?php
if(empty($hc)){
// require "/var/www/api.ntfg.net/htdocs/hammer/vanilla.php";
$hammer->setHS("6500E897-DAAD-473B-90FC-9C1034A04AFD");
$hc = new hammer_content($hammer);
}

$hc->getByID($id);
echo $hc->row['content'];
?>