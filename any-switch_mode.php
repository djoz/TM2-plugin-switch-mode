<?php
Aseco::registerEvent('onStartup', 'sm_startup');
Aseco::registerEvent('onEndRound', 'sm_endRound');

global $switchmode;

function sm_startup($aseco, $command) {
    global $switchmode;
    $switchmode = new SwitchMode($aseco);
    $swichtmode->counter = 2;//start with TA
}

function sm_endRound($aseco) {
	
	
	if($switchmode->counter == 2){//TA
		$switchmode->counter--;
		$aseco->client->query('ReplayMap');
	}
	else{//Rounds
		$switchmode->counter++;
	}
	$aseco->client->query('SetGameMode('.$switchmode->counter.')');
}


class SwitchMode {
    private $aseco;
	private $counter;
    

    function SwitchMode($aseco) {
        $this->aseco = $aseco; 
    }
}
?>
