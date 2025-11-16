<?php
require_once 'core/AncientWisdom.php';

echo "ANTIQUUS: Древняя мудрость PHP для Codex Mortis!\n";

$wisdom = new AncientWisdom();
echo $wisdom->awaken() . "\n";
echo "Motto: " . $wisdom->getLatinMotto() . "\n";
?>
