<?php
require_once 'core/AncientWisdom.php';

echo "Antiquus: PHP древняя мудрость для Codex Mortis!\n";
echo "Motto: Antiquus ex PHP - Sapientia Antiqua\n";

$wisdom = new AncientWisdom();
echo $wisdom->awaken() . "\n";
echo $wisdom->getStatus() . "\n";
?>
