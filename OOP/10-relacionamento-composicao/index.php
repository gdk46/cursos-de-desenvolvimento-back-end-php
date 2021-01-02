<?php

require "VideoGame.class.php";
require "Game.class.php";

$v = new VideoGame();
$v->add("LOL");

echo "<pre>";
print_r($v);