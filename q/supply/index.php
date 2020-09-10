<?php
require '../util.php';
$config = (require '../../config.php');

//$hashData = fetch_rpc($config['api'], 'getlastblockheader', '""');
//$hash = $hashData['result']['block_header']['hash'];

//$blockData = fetch_rpc($config['api'], 'f_block_json', '{"hash":"'.$hash.'"}');
//$supplyRaw = $blockData[result][block][alreadyGeneratedCoins];

//$supply = number_format($supplyRaw / $config['coinUnits'], 2, ".", "");

//print_r($supply);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $config['api'].'/getinfo');
$result = curl_exec($ch);
$obj = json_decode($result, TRUE);

curl_close($ch);

$supplyRaw = $obj[already_generated_coins];

$supply = number_format($supplyRaw , 2, ".", "");

print_r($supply);


