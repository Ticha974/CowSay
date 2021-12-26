<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

$milka = new Cow('Hello, I am Milka!');
$milka->setTongue('U')
    ->setUdder('W');
echo $milka;
