<?php
Aseco::registerEvent('onEndMap', 'sm_endMap');


function sm_endMap($aseco) {

$gamemode = $aseco->client->query('GetGameMode()');

if($gamemode == 2){//TA
$aseco->client->query('SetGameMode(1)');
$aseco->client->query('RestartMap');
}
else if($gamemode == 1){//Rounds
$aseco->client->query('SetGameMode(2)');
}


?>
