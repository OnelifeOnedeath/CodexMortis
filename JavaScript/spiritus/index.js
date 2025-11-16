console.log("Spiritus: JavaScript дух для Codex Mortis!");
console.log("Motto: Spiritus ex JavaScript - Anima Webi");

import { SpiritusEngine } from './src/core/SpiritusEngine.js';

const spiritus = new SpiritusEngine();
spiritus.ignite();
console.log(spiritus.getStatus());
