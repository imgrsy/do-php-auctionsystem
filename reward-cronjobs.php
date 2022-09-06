<?php
$mysqli->begin_transaction();
$mysqli = Database::GetInstance();
$player = Functions::GetPlayer();

try{
  // kazanan pid'i çektik
$kazananbidlf4 = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 1')->fetch_assoc()['bid_pid']);
//$kazananbidlf4_lf4_2 = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 6')->fetch_assoc()['bid_pid']);
$kazananbidlf4_lf4_3 = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 7')->fetch_assoc()['bid_pid']);
//$kazananbidlf4_lf4_4 = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 6')->fetch_assoc()['bid_pid']);
$kazananbidhercul = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 2')->fetch_assoc()['bid_pid']);
$kazananbidhavoc = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 3')->fetch_assoc()['bid_pid']);
$kazananbid_apis = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 4')->fetch_assoc()['bid_pid']);
$kazananbid_zeus = json_decode($mysqli->query('SELECT bid_pid FROM bid_system WHERE bid_id = 5')->fetch_assoc()['bid_pid']);

// kazanan pid oyuncunun envanterini çektik
if ($kazananbidlf4 != 1){
$items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidlf4 . '')->fetch_assoc()['items']);
$items->lf4Count ++;
$mysqli->query("UPDATE player_equipment SET items = '".json_encode($items)."' WHERE userId = ".$kazananbidlf4."");
}

//lf4 iki
/*if ($kazananbidlf4_lf4_2 != 1){
  $items_lf4_2 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidlf4_lf4_2 . '')->fetch_assoc()['items']);
  $items_lf4_2->lf4Count ++;
  $mysqli->query("UPDATE player_equipment SET items = '".json_encode($items_lf4_2)."' WHERE userId = ".$kazananbidlf4_lf4_2."");
  } */
//lf4 iki

//lf4 uc
if ($kazananbidlf4_lf4_3 != 1){
  $items_lf4_3 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidlf4_lf4_3 . '')->fetch_assoc()['items']);
  $items_lf4_3->lf4Count ++;
  $mysqli->query("UPDATE player_equipment SET items = '".json_encode($items_lf4_3)."' WHERE userId = ".$kazananbidlf4_lf4_3."");
  }
//lf4 uc


//lf4 dort
/*if ($kazananbidlf4_lf4_4 != 1){
  $items_lf4_4 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidlf4_lf4_4 . '')->fetch_assoc()['items']);
  $items_lf4_4->lf4Count ++;
  $mysqli->query("UPDATE player_equipment SET items = '".json_encode($items_lf4_4)."' WHERE userId = ".$kazananbidlf4_lf4_4."");
  }*/
//lf4 dort


if ($kazananbidhercul != 1){
$itemshercul = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidhercul . '')->fetch_assoc()['items']);
$itemshercul->herculesCount ++;
$mysqli->query("UPDATE player_equipment SET items = '".json_encode($itemshercul)."' WHERE userId = ".$kazananbidhercul."");
}


if ($kazananbidhavoc != 1){
$itemshavoc = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbidhavoc . '')->fetch_assoc()['items']);
$itemshavoc->havocCount ++;
$mysqli->query("UPDATE player_equipment SET items = '".json_encode($itemshavoc)."' WHERE userId = ".$kazananbidhavoc."");
}

if ($kazananbid_apis != 1){
$items_apis = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbid_apis . '')->fetch_assoc()['items']);
$items_apis->apis = true;
$mysqli->query("UPDATE player_equipment SET items = '".json_encode($items_apis)."' WHERE userId = ".$kazananbid_apis."");
}


if ($kazananbid_zeus != 1){
$items_zeus = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $kazananbid_zeus . '')->fetch_assoc()['items']);
$items_zeus->zeus = true;
$mysqli->query("UPDATE player_equipment SET items = '".json_encode($items_zeus)."' WHERE userId = ".$kazananbid_zeus."");
}


# dağıtımdan sonra tabloları sıfırlıyoruz
$bid_zero_pid = 1;
$bid_zero_pilotname = 0;
$bid_zero_credit = 1;
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 1');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 1');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 1');
 //
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 6');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 6');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 6');
 //
 //
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 7');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 7');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 7');
 //
 //
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 8');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 8');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 8');
 //
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 2');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 2');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 2');
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 3');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 3');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 3');
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 4');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 4');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 4');
 $mysqli->query('UPDATE bid_system SET bid_pid = ' . $bid_zero_pid . ' WHERE bid_id = 5');
 $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . $bid_zero_pilotname . ' WHERE bid_id = 5');
 $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zero_credit . ' WHERE bid_id = 5');


$mysqli->commit();
} catch (Exception $e) {
  $mysqli->rollback();
}
$mysqli->close();
?>
