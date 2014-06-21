TM2-plugin-switch-mode
======================

This is the beginning of the development of the plugin...
... it will switch game-mode from TA to Rounds and back


Pedrolito : I think one way to do it would be to take an event at the start of a map, and ask xaseco what mode is currently running (round or ta). Then us the "if" and tell xaseco to change the mode, and restart (or not).

I don't know how to right that properly, but it would looks something like this.

int GetGameMode()
if ($xaseco GameMode(1)
    ;SetGameMode(2) 
    ;RestartChallenge() 
if ($xaseco Gamemode(2)
    ;SetGameMode(1)
    
What do you think ?

doe-eye: finally i found out, that GetGameMode() always delivered the same value... seems to fetch the match-settings-value or sth like that. Tried it with aseco->server->gameinfo->mode et voilà :) now it works!

