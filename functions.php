<?php
# Açık arttırma başlangıç
function acik_arttirma($bid_credit)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi01 = 1; //lf4

  $bideski = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi01 . '')->fetch_assoc()['bid_credit']);
  $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_credit = $mysqli->real_escape_string($bid_credit);




  #lf4
  if ($items->lf4Count < 40) {
    if ($bid_credit <= $bideski) {

      echo "Your bid is low";

      return null;
    }

    if ($data->credits <= $bid_credit) {

      echo "your credit is insufficient";

      return null;
    }


    if ($data->credits >= $bid_credit) {
      $data->credits -= $bid_credit;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 1');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 1');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_credit . ' WHERE bid_id = 1');



        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account LF4 Max Limit";
  }
  return null;
}

// LF4 IKINCI

# Açık arttırma başlangıç
function acik_arttirma_lf4_2($bid_credit_lf4_2)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi01_lf4_2 = 6; //lf4

  $bideski_lf4_2 = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi01_lf4_2 . '')->fetch_assoc()['bid_credit']);
  $items_lf4_2 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_credit_lf4_2 = $mysqli->real_escape_string($bid_credit_lf4_2);




  #lf4
  if ($items_lf4_2->lf4Count < 40) {
    if ($bid_credit_lf4_2 <= $bideski_lf4_2) {

      echo "Your bid is low";

      return null;
    }

    if ($data->credits <= $bid_credit_lf4_2) {

      echo "your credit is insufficient";

      return null;
    }


    if ($data->credits >= $bid_credit_lf4_2) {
      $data->credits -= $bid_credit_lf4_2;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 6');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 6');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_credit_lf4_2 . ' WHERE bid_id = 6');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account LF4 Max Limit";
  }
  return null;
}



// LF4 IKINCI

// LF4 ucuncu

# Açık arttırma başlangıç
function acik_arttirma_lf4_3($bid_credit_lf4_3)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi01_lf4_3 = 7; //lf4

  $bideski_lf4_3 = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi01_lf4_3 . '')->fetch_assoc()['bid_credit']);
  $items_lf4_3 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_credit_lf4_3 = $mysqli->real_escape_string($bid_credit_lf4_3);




  #lf4
  if ($items_lf4_3->lf4Count < 40) {
    if ($bid_credit_lf4_3 <= $bideski_lf4_3) {

      echo "Your bid is low";

      return null;
    }

    if ($data->uridium <= $bid_credit_lf4_3) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_credit_lf4_3) {
      $data->uridium -= $bid_credit_lf4_3;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 7');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 7');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_credit_lf4_3 . ' WHERE bid_id = 7');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account LF4 Max Limit";
  }
  return null;
}



// LF4 ucuncu



// LF4 dorduncu

# Açık arttırma başlangıç
function acik_arttirma_lf4_4($bid_credit_lf4_4)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi01_lf4_4 = 8; //lf4

  $bideski_lf4_4 = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi01_lf4_4 . '')->fetch_assoc()['bid_credit']);
  $items_lf4_4 = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_credit_lf4_4 = $mysqli->real_escape_string($bid_credit_lf4_4);




  #lf4
  if ($items_lf4_4->lf4Count < 40) {
    if ($bid_credit_lf4_4 <= $bideski_lf4_4) {

      echo "Your bid is low";

      return null;
    }

    if ($data->uridium <= $bid_credit_lf4_4) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_credit_lf4_4) {
      $data->uridium -= $bid_credit_lf4_4;
      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 8');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 8');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_credit_lf4_4 . ' WHERE bid_id = 8');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account LF4 Max Limit";
  }
  return null;
}



// LF4 dorduncu



function acik_arttirmahavoc($bid_havoc)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi03 = 3; //havoc

  $bideskihavoc = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi03 . '')->fetch_assoc()['bid_credit']);
  $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_havoc = $mysqli->real_escape_string($bid_havoc);




  #havoc
  if ($items->havocCount < 10) {
    if ($bid_havoc <= $bideskihavoc) {

      echo "Your bid is low";

      return null;
    }

    if ($data->uridium <= $bid_havoc) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_havoc) {
      $data->uridium -= $bid_havoc;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 3');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 3');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_havoc . ' WHERE bid_id = 3');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account Havoc Max Limit";
  }
  return null;
}

function acik_arttirmahercul($bid_hercul)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi02 = 2; //hercul

  $bideskihercul = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi02 . '')->fetch_assoc()['bid_credit']);
  $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_hercul = $mysqli->real_escape_string($bid_hercul);




  #hercul
  if ($items->herculesCount < 10) {
    if ($bid_hercul <= $bideskihercul) {

      echo "Your bid is low";
      $json['message'] = 'Something went wrong!';
      return null;
    }

    if ($data->uridium <= $bid_hercul) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_hercul) {
      $data->uridium -= $bid_hercul;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 2');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 2');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_hercul . ' WHERE bid_id = 2');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account Hercules Max Limit";
  }
  return null;
}


function acik_arttirma_apis($bid_apis)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi04 = 4; //apis

  $bideskiapis = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi04 . '')->fetch_assoc()['bid_credit']);
  $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_apis = $mysqli->real_escape_string($bid_apis);




  #apis
  if (!$items->apis) {
    if ($bid_apis <= $bideskiapis) {

      echo "Your bid is low";

      return null;
    }

    if ($data->uridium <= $bid_apis) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_apis) {
      $data->uridium -= $bid_apis;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 4');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 4');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_apis . ' WHERE bid_id = 4');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account APIS Limit";
  }
  return null;
}

// 

function acik_arttirma_zeus($bid_zeus)
{

  $mysqli = Database::GetInstance();
  $player = Functions::GetPlayer();
  $data = json_decode($player['data']);
  $bididsi05 = 5; //zeus

  $bideskizeus = json_decode($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = ' . $bididsi05 . '')->fetch_assoc()['bid_credit']);
  $items = json_decode($mysqli->query('SELECT items FROM player_equipment WHERE userId = ' . $player['userId'] . '')->fetch_assoc()['items']);

  $bid_zeus = $mysqli->real_escape_string($bid_zeus);




  #zeus
  if (!$items->zeus) {
    if ($bid_zeus <= $bideskizeus) {

      echo "Your bid is low";

      return null;
    }

    if ($data->uridium <= $bid_zeus) {

      echo "your uridium is insufficient";

      return null;
    }


    if ($data->uridium >= $bid_zeus) {
      $data->uridium -= $bid_zeus;

      echo "Your offer is successful :)";
      $mysqli->begin_transaction();
      try {
        $mysqli->query("UPDATE player_accounts SET data = '" . json_encode($data) . "' WHERE userId = " . $player['userId'] . "");
        $mysqli->query('UPDATE bid_system SET bid_pid = ' . $player['userId'] . ' WHERE bid_id = 5');
        $mysqli->query('UPDATE bid_system SET bid_pilotname = ' . json_encode(($player['pilotName']), JSON_UNESCAPED_UNICODE) . ' WHERE bid_id = 5');
        $mysqli->query('UPDATE bid_system SET bid_credit = ' . $bid_zeus . ' WHERE bid_id = 5');

        $mysqli->commit();
      }
      catch (Exception $e) {
        $mysqli->rollback();
      }
      $mysqli->close();
    }
  }
  else {
    echo "Your account ZEUS Limit";
  }
  return null;
}
// offer finish
# Açk arttırma bitiş
?>