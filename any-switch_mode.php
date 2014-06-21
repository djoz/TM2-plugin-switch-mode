<?php

Aseco::registerEvent('onEndMap', 'sm_endMap');



function sm_endMap($aseco, $map){
	$currGameInfo = $aseco->server->gameinfo;
	$gamemode = $currGameInfo->mode;
	
	
	if($gamemode == 1){//Rounds
		$aseco->client->query('SetGameMode',2);
	}
	else if($gamemode == 2){//TA
		$aseco->client->query('SetGameMode',1);
		$aseco->client->query('RestartMap');
	}
}


?>
