import { createApp } from "vue";
import { createPinia } from "pinia";
import router from "./src/router";
import App from "./src/App.vue";
import PrimeVue from "primevue/config";
import Aura from "@primeuix/themes/aura";
import Image from "primevue/image";
import ProgressSpinner from "primevue/progressspinner";

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
app.use(createPinia());

app.component("Image", Image);
app.component("ProgressSpinner", ProgressSpinner);

app.mount("#app");
