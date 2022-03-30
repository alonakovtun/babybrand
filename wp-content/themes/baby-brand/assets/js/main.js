import { ready } from "./utils";
import { initHeaderScripts } from "./header";

function initHomePageScripts() {
    
}

(function () {
    const config = window.js_config;

    ready(() => {
        console.log("ready", { config });

        initHeaderScripts();

        initHomePageScripts();
    });
})();
