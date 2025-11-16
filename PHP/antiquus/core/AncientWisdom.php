<?php

class AncientWisdom {
    private string $motto = "PHP ex Antiquus - Sapientia Antiqua";
    
    public function awaken(): string {
        return "Antiquus: Вечная сила Web для Codex Mortis!";
    }
    
    public function getLatinMotto(): string {
        return $this->motto;
    }
}
