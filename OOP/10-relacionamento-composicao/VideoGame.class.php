<?php

class VideoGame
{
    private $brinde;
    
    public function add(string $game)
    {
        $this->brinde = new Game($game);
    }
    
}