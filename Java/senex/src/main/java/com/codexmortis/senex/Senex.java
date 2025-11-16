package com.codexmortis.senex;

import com.codexmortis.senex.core.ChaosOrchestrator;

public class Senex {
    public static void main(String[] args) {
        System.out.println("Senex: Enterprise мудрость для Codex Mortis!");
        System.out.println("Motto: Senex ex Java - Sapientia Enterprise");
        
        ChaosOrchestrator orchestrator = new ChaosOrchestrator();
        orchestrator.initializeChaos();
    }
}
