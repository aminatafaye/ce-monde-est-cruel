<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class BobPlayers
 * @package Hackathon\PlayerIA
 * @author Aminata FAYE 
 DESCRIPTION: 
 J'ai dans un premier temps essayé de choisir ma main grâce au score du tour précendent. 
 Ayant passer beacucoup de temps à débuger, j'ai choisi de faire de choisir de faire la même chose que ce que qu'à fait mon adversaire à la main précedente 
 */
class BobPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
       if ( $this->result->getLastChoiceFor($this->mySide))
            return parent::rockChoice();
       
        if ( ($this->result->getLastChoiceFor($this->opponentSide)) == "scissors")
            return parent::scissorsChoice();
        elseif (($this->result->getLastChoiceFor($this->opponentSide)) == "paper")
            return parent::paperChoice();
        elseif (($this->result->getLastChoiceFor($this->opponentSide)) == "rock")
            return parent::rockChoice();
        
        
       /* if ( $this->result->getLastScoreFor($this->mySide) >= $this->result->getLastScoreFor($this->opponentSide) )
             return  $this->result->getLastChoiceFor($this->mySide);
         else 
            return  ($this->result->getLastChoiceFor($this->oppenentSide)); */
        
        
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------


        return parent::rockChoice();

    }
};
