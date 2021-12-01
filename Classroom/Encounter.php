<?php

class Encounter
{
    public int $RESULT_WINNER;
    public int $RESULT_LOSER;
    public int $RESULT_DRAW;


    function probabilityAgainst(int $levelPlayerOne, int $againstLevelPlayerTwo): float|int
    {
        return 1/(1+(10 ** (($againstLevelPlayerTwo - $levelPlayerOne)/400)));
    }
    function setNewLevel(int &$levelPlayerOne, int $againstLevelPlayerTwo, int $playerOneResult)
    {
        if (!in_array($playerOneResult, RESULT_POSSIBILITIES)) {
            trigger_error(sprintf('Invalid result. Expected %s',implode(' or ', RESULT_POSSIBILITIES)));
        }

        $levelPlayerOne += (int) (32 * ($playerOneResult - probabilityAgainst($levelPlayerOne, $againstLevelPlayerTwo)));
    }

}