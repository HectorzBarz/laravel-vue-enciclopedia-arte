<script setup>
import ItemCardHolder from "./ItemCardHolder.vue";
import { useSearchStore } from "../../stores/SearchStore";
import { ref, onMounted } from "vue";
import axios from "axios";

// store de las checkboxes
const store = useSearchStore();

const menuMovements = [
    "Proto-Renacimiento",
    "Quattrocento",
    "Cinquecento",
    "Manierismo",
    "Renacimiento del Norte de Europa",
    "Barroco",
    "Rococó",
    "Neoclasicismo",
    "Romanticismo",
    "Realismo",
    "Impresionismo",
    "Postimpresionismo",
    "Simbolismo",
    "Primitivismo",
    "Art Nouveau",
    "Art Decó",
    "Orientalismo",
    "Fauvismo",
    "Futurismo",
    "Expresionismo",
    "Cubismo",
    "Dadaísmo",
    "Nueva Objetividad",
    "Suprematismo",
    "Constructivismo",
    "Arte Abstracto",
    "Pintura Metafísica",
    "Surrealismo",
    "Orfismo",
    "Neoplasticismo",
    "Precisionismo",
    "Expresionismo Abstracto",
    "Art Brut",
    "Informalismo",
    "Nueva Figuración",
    "Arte Cinético",
    "Op-Art",
    "Pop-Art",
    "Nouveau Réalisme",
    "Nuevo Realismo",
    "Realismo social",
    "Arte conceptual",
    "Minimalismo",
    "Acción",
    "Hiperrealismo",
    "Postmodernidad",
    "Street Art",
    "Land Art",
    "Arte Povera",
];

// const items = ref([]);

// onMounted(async () => {
//     try {
//         const response = await axios.get("/api/search");
//         items.value = response.data;
//     } catch (error) {
//         console.error("Error al cargar los artistas:", error);
//     }
// });
const items = [
    {
        img: "articles/drives-me-crazy.jpg",
        title: "Anna Weyant conquista el Thyssen: una mirada contemporánea con alma antigua",
        date: "14/07/2025",
        route: "/articles/",
    },
    {
        img: "artists/francisco-de-goya.jpg",
        title: "Francisco de Goya",
        date: "22/07/2025",
        route: "/artists/",
    },
    {
        img: "artists/diego-velazquez.jpg",
        title: "Diego Velázquez",
        date: "22/07/2025",
        route: "/artists/",
    },
    {
        img: "pieces/impresion-sol-naciente.jpg",
        title: "Impresión, sol naciente",
        date: "22/07/2025",
        route: "/art-piece/",
    },
    {
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "22/07/2025",
        route: "/art-piece/",
    },
    {
        img: "movements/san-jeronimo-escribiendo.jpg",
        title: "Barroco",
        date: "1600–1750",
        route: "/movements/",
    },
];
</script>

<template>
    <div
        class="my-10 flex h-full flex-col rounded-2xl bg-violet-100 p-5 sm:mx-10 lg:mx-20 xl:mx-16 xl:flex-row"
    >
        <!-- seccion del buscador -->
        <section>
            <div
                class="h-full w-full border-b-2 border-violet-200 px-5 py-5 lg:min-w-96 lg:border-b-0 xl:border-r-2"
            >
                <!-- barra de búsqueda -->
                <input
                    type="search"
                    name="search-bar"
                    id="search-bar"
                    class="mb-5 h-10 w-full rounded-sm border bg-white px-2 text-lg"
                    placeholder="Buscador..."
                />
                <!-- FIN barra de búsqueda -->

                <!-- bloque de checkboxes para opciones de filtrado -->
                <div
                    v-for="(item, index) of store.checked"
                    :key="index"
                    class="pr-2"
                >
                    <input
                        class="size-5"
                        type="checkbox"
                        :id="'checkbox' + index"
                        v-model="item.checked"
                        @click="item.checked = !item.checked"
                    />
                    <label :for="'checkbox' + index" class="px-2 text-2xl">
                        {{ item.name }}
                    </label>
                </div>
                <!-- FIN bloque de checkboxes para opciones de filtrado -->

                <!-- opciones de obras -->
                <div v-if="store.checked[2].checked" class="py-5">
                    <h3
                        class="border-t-2 border-violet-200 py-2 text-center text-2xl"
                    >
                        Opciones de Obras
                    </h3>
                    <div
                        class="flex flex-col items-center justify-center gap-1 lg:flex-row lg:gap-5 xl:flex-col xl:gap-1"
                    >
                        <input
                            type="number"
                            name="start-year"
                            id="start-year"
                            class="text-md h-10 w-auto rounded-sm border bg-white px-1 py-2 text-center"
                            placeholder="Año de inical"
                        />
                        -
                        <input
                            type="number"
                            name="end-year"
                            id="end-year"
                            class="text-md h-10 w-auto rounded-sm border bg-white px-1 py-2 text-center"
                            placeholder="Año de final"
                        />
                    </div>
                </div>
                <!-- FIN opciones de obras -->

                <!-- opciones moviminetos artisticos -->
                <div v-if="store.checked[3].checked" class="flex flex-col py-5">
                    <label
                        for="movement-select"
                        class="border-t-2 border-violet-200 py-2 text-center text-2xl"
                        >~ Movimientos Artísticos ~</label
                    >

                    <select
                        name="movements"
                        id="movement-select"
                        class="rounded-sm border bg-white py-2 text-lg"
                    >
                        <option
                            value=""
                            class="items-start text-center"
                            selected
                        >
                            -- Selecciona una opción --
                        </option>
                        <option
                            v-for="item of menuMovements"
                            :value="item"
                            class="text-center"
                        >
                            {{ item }}
                        </option>
                    </select>
                </div>
                <!-- FIN opciones moviminetos artisticos -->
            </div>
        </section>
        <!-- FIN seccion del buscador -->

        <!-- seccion del contenido buscado -->

        <section>
            <div class="h-full w-full">
                <h3 class="flex justify-center px-5 py-5 text-4xl">
                    Resultados encontrados: 100
                </h3>
                <!-- bloque donde se mostrarán los resultados: -->
                <div
                    class="grid gap-5 px-20 sm:grid-cols-2 sm:px-8 lg:px-16 xl:grid-cols-3 xl:gap-10 xl:px-16 2xl:grid-cols-4"
                >
                    <ItemCardHolder
                        v-for="(item, index) in items"
                        :key="index"
                        :item="item"
                        :route="item.route"
                    />
                </div>
                <!-- flechas de paginación -->
                <div class="mt-10 flex justify-between px-16">
                    <button
                        class="cursor-pointer rounded-full border bg-purple-200 px-3.5 py-2.5 text-2xl font-black shadow-2xl transition-colors delay-100 hover:bg-violet-300"
                    >
                        ←
                    </button>
                    <button
                        class="cursor-pointer rounded-full border bg-purple-200 px-3.5 py-2.5 text-2xl font-black shadow-2xl transition-colors delay-100 hover:bg-violet-300"
                    >
                        →
                    </button>
                </div>
                <!-- FIN flechas de paginación -->
            </div>
        </section>
        <!-- FINseccion del contenido buscado -->
    </div>
</template>
