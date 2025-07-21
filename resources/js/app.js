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
            cssLayer: {
                name: "primevue",
                // Enable PrimeVue CSS layer and configure the tailwind styles to have higher specificity with layering
                order: "tailwind-base, primevue, tailwind-utilities",
            },
        },
    },
});

app.use(router);

app.component("Button", Button);

app.mount("#app");
