<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

import { ref, onMounted } from "vue";
import axios from "axios";
import { useRoute } from "vue-router";

const route = useRoute();

// datos de la BBDD
const artist = ref(null);
const movements = ref(null);
const pieces = ref(null);

// Asignar datos de la BBDD gracias a api local
onMounted(async () => {
    try {
        const response = await axios.get(`/api/artists/${route.params.id}`);
        artist.value = response.data;

        const movementsResponse = await axios.get(
            `/api/artists/${route.params.id}/movements`,
        );
        movements.value = movementsResponse.data;

        const piecesResponse = await axios.get(
            `/api/artists/${route.params.id}/artpieces`,
        );
        pieces.value = piecesResponse.data;
    } catch (error) {
        console.error("Error al cargar el artista:", error);
    }
});
</script>
<template>
    <!-- si existe el artista muestra la información -->
    <div
        class="my-10 flex h-full flex-col rounded-2xl bg-violet-100 sm:p-5 lg:mx-20 xl:mx-16 xl:flex-row"
        v-if="artist"
    >
        <!-- seccion de la información del artista -->
        <section class="border-b-2 border-violet-200 xl:border-0">
            <div
                class="flex h-full w-full flex-col items-center border-violet-200 px-5 py-5 lg:min-w-96 lg:flex-row lg:items-start lg:justify-start lg:border-b-0 xl:flex-col xl:border-r-2"
            >
                <!-- artist image -->
                <div>
                    <Image
                        :src="`/images/${artist.img}`"
                        alt="artist-image"
                        preview
                    />
                </div>

                <!-- artists info -->
                <div class="px-5 py-5">
                    <p class="mb-1 text-4xl">{{ artist.name }}</p>
                    <p class="mb-2 text-2xl">
                        {{ artist.country }}, {{ artist.start }} -
                        {{ artist.end }}
                    </p>
                    <div
                        class="flex flex-col gap-5 text-center sm:flex-row sm:text-start"
                    >
                        <!-- artist movements -->
                        <p
                            class="cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-xl transition-colors delay-100 hover:bg-violet-300"
                            v-for="item in movements"
                        >
                            <RouterLink :to="`/movements/${item.id}`">
                                {{ item.title }}
                            </RouterLink>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIN seccion de la información del artista -->

        <!-- seccón de algunas de las obras del artista -->
        <section>
            <div class="h-full w-full">
                <p
                    class="mx-1 my-5 rounded-md bg-violet-200 p-5 text-justify text-xl sm:m-5 sm:mx-10 md:columns-2"
                >
                    {{ artist.description }}
                </p>
                <div
                    class="flex flex-col justify-between gap-10 p-10 sm:p-26 md:flex-row md:justify-evenly md:px-10 md:py-5"
                >
                    <ItemCardHolder
                        v-for="item in pieces"
                        :key="item.id"
                        :item="item"
                        :route="`/artpieces/`"
                    />
                </div>
            </div>
        </section>
        <!-- FIN seccón de algunas de las obras del artista -->
    </div>
    <div v-else>
        <section class="m-20 flex justify-center">
            <ProgressSpinner />
        </section>
    </div>
</template>
