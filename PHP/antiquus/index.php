<?php
require_once 'core/AncientWisdom.php';

echo "ANTIQUUS: Древняя мудрость PHP пробуждена!\n";

$wisdom = new AncientWisdom();
echo $wisdom->awaken() . "\n";
echo $wisdom->proclaimLatinMotto() . "\n";
