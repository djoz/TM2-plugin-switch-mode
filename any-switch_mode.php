<?php
Aseco::registerEvent('onStartup', 'sm_startup');
Aseco::registerEvent('onEndRound', 'sm_endRound');

global $switchmode;

function sm_startup($aseco, $command) {
    global $switchmode;
    $switchmode = new SwitchMode($aseco);
	$counter = 2;//start with TA
}

function sm_endRound($aseco) {
	
	
	if($counter == 2){//TA
		$counter--;
		$aseco->client->query('RestartMap');
	}
	else{//Rounds
		$counter++;
	}
	$aseco->client->query('SetGameMode('.$counter.')');
}


class SwitchMode {
    private $aseco;
	private $counter;
    

    function SwitchMode($aseco) {
        $this->aseco = $aseco; 
    }
}
?>
