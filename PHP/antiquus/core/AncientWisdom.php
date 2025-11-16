<?php

class AncientWisdom {
    private $motto = "PHP ex Antiquus - Sapientia Antiqua";
    
    public function awaken(): string {
        return "Antiquus: Древняя сила Web пробуждена!";
    }
    
    public function getStatus(): string {
        return "Antiquus: Веб-сервер готов служить!";
    }
    
    public function getLatinMotto(): string {
        return $this->motto;
    }
    
    public function manageChaos(): string {
        return "Antiquus: Древний хаос под контролем!";
    }
}
