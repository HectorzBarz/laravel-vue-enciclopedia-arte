import { createApp } from "vue";
import App from "./src/App.vue";
import router from "./src/router";
import PrimeVue from "primevue/config";
import Button from "primevue/button";
import Aura from "@primeuix/themes/aura";

const app = createApp(App);

app.use(PrimeVue, {
    theme: {
        preset: Aura,
        options: {
            darkModeSelector: ".fake-dark-selector", // trying to also force a non-usage of the dark mode
        },
    },
});

app.use(router);

app.component("Button", Button);

app.mount("#app");
