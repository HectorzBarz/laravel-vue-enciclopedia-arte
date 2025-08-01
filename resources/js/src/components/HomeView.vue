<script setup>
import ItemCardHolder from "./layouts/ItemCardHolder.vue";
import Quoue from "./home/Quoue.vue";

import { ref, onMounted } from "vue";
import axios from "axios";

const artists = ref([]);
const pieces = ref([]);
const movements = ref([]);
const articles = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get("/api/artpieces/home");
        pieces.value = response.data;

        const artistResponse = await axios.get("/api/artists/home");
        artists.value = artistResponse.data;

        const movementResponse = await axios.get("/api/movements/home");
        movements.value = movementResponse.data;

        const articleResponse = await axios.get("/api/articles/home");
        articles.value = articleResponse.data;
    } catch (error) {
        console.error("Error al cargar los datos:", error);
    }
});
</script>

<template>
    <!-- sección de explicación de qué va la página -->
    <Quoue />

    <!-- main, donde va el contenido, principalmente las cartas de los artículos -->
    <main>
        <!-- contenedor de todas las secciones del main -->
        <div
            class="my-5 flex flex-col rounded-2xl bg-violet-100 md:mx-12 lg:mx-14 xl:mx-0 xl:flex-row xl:items-center 2xl:mx-12"
        >
            <!-- contenedor de las secciones "Obras", "Artistas" y "Artículos Recientes"-->
            <div class="w-full">
                <!-- seccion de "Obras" -->
                <section id="pieces-section" class="my-5" v-if="pieces">
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Obras
                    </h3>

                    <div
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="piece in pieces"
                            :key="piece.id"
                            :item="piece"
                            route="/artpieces/"
                        />
                    </div>
                </section>

                <!-- seccion de "Artistas" -->
                <section
                    id="artists-section"
                    class="my-5 border-t-2 border-violet-200 py-2"
                    v-if="artists"
                >
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Artistas
                    </h3>

                    <div
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="artist in artists"
                            :key="artist.id"
                            :item="artist"
                            route="/artists/"
                        />
                    </div>
                </section>

                <!-- seccion de movimientos artísticos -->
                <section
                    id="movements-section"
                    class="my-5 border-t-2 border-violet-200 py-2"
                    v-if="movements"
                >
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Movimientos Artísticos
                    </h3>

                    <div
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="(movement, index) in movements"
                            :key="index"
                            :item="movement"
                            route="/movements/"
                        />
                    </div>
                </section>
            </div>

            <!-- FIN contenedor de las secciones "Obras" y "Artistas" -->

            <!-- contenedor de los artículos recientes -->

            <div class="w-full">
                <section
                    id="articles"
                    class="border-t-2 border-violet-200 py-2 xl:border-t-0 xl:border-l-2 xl:py-32 2xl:my-5"
                >
                    <h3 class="font-soul mb-2.5 text-center text-3xl font-bold">
                        Artículos recientes
                    </h3>

                    <div
                        class="flex flex-col justify-around gap-10 px-10 sm:px-32 md:grid md:grid-cols-2 md:px-10 lg:grid lg:grid-cols-2 lg:items-center xl:grid xl:grid-cols-2"
                    >
                        <ItemCardHolder
                            v-for="(article, index) in articles"
                            :key="index"
                            :item="article"
                            route="/articles/"
                        />
                    </div>
                </section>
            </div>

            <!-- FIN contenedor de los artículos recientes -->
        </div>

        <!-- FIN contenedor de todas las secciones del main -->
    </main>
</template>
