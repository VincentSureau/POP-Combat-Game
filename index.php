<?php

use App\Personnage;

require 'vendor/autoload.php';

$hero = new Personnage('Hero', 200, 15);

dump($hero);