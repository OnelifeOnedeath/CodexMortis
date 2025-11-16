package com.codexmortis.senex;

import com.codexmortis.senex.core.ChaosOrchestrator;

public class Senex {
    public static void main(String[] args) {
        System.out.println("Senex: Enterprise мудрость пробуждена!");
        
        ChaosOrchestrator orchestrator = new ChaosOrchestrator();
        orchestrator.initializeChaos();
    }
}
