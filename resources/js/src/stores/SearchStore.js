import { defineStore } from "pinia";
import { ref } from "vue";

export const useSearchStore = defineStore("search", () => {
    // state
    const checked = ref([
        {
            name: "Artistas",
            checked: false,
        },
        {
            name: "Obras",
            checked: false,
        },
        {
            name: "Movimientos",
            checked: false,
        },
        {
            name: "Artículos",
            checked: false,
        },
    ]);
    // getters
    // actions
    return { checked };
});
