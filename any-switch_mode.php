<?php
Aseco::registerEvent('onStartup', 'sm_startup');
Aseco::registerEvent('onEndMap', 'sm_endRound');

global $switchmode;

function sm_startup($aseco, $command) {
    global $switchmode;
    $switchmode = new SwitchMode($aseco);
}

function sm_endRound($aseco) {
global $switchmode;

if($switchmode->counter == 2){//TA
$switchmode->counter = 1;
$aseco->client->query('SetGameMode(2)');
$aseco->client->query('RestartMap');
}
else{//Rounds
$switchmode->counter = 2;
$aseco->client->query('SetGameMode(1)');
}

}


class SwitchMode {
    private $aseco;
public $counter;
    

    function SwitchMode($aseco) {
        $this->aseco = $aseco;
		$this->counter = 2;
    }
}
?>
