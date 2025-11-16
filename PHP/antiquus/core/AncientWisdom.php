<?php

class AncientWisdom {
    private string $motto = "Codex Mortis - Unus Vita, Unus Mors";
    
    public function awaken(): string {
        return "Antiquus: Вечная сила Web готова служить Codex Mortis!";
    }
    
    public function proclaimLatinMotto(): string {
        return "PHP ex antiquitate: \"{$this->motto}\"";
    }
    
    public function manageChaos(): string {
        return "Древний хаос Web под контролем Antiquus!";
    }
}
