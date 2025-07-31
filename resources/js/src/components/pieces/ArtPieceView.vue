<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRoute } from "vue-router";
import ArtistItemHolder from "./ArtistItemHolder.vue";

const route = useRoute();
const piece = ref(null);
const artist = ref(null);

onMounted(async () => {
    try {
        const response = await axios.get(`/api/artpieces/${route.params.id}`);
        piece.value = response.data;
        const artistResponse = await axios.get(
            `/api/artpieces/${route.params.id}/artist`,
        );
        artist.value = artistResponse.data[0];
    } catch (error) {
        console.error("Error al cargar la obra:", error);
    }
});
</script>

<template>
    <div class="my-10 rounded-xl bg-violet-100 sm:mx-5 sm:p-5" v-if="piece">
        <section class="mx-1 mb-5 md:mx-5 lg:mx-20 xl:mx-5 xl:flex">
            <Image
                :src="`/images/${piece.img}`"
                alt="piece-image"
                class="content-center"
                preview
            />
            <div
                class="mb-5 sm:px-5 md:mb-10 xl:content-center xl:items-center"
            >
                <div
                    class="my-5 grid gap-2 sm:flex sm:justify-around lg:mx-10 lg:gap-5"
                >
                    <p
                        class="mx-10 cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-center text-xl transition-colors delay-100 hover:bg-violet-300 sm:mx-0 lg:text-2xl"
                        v-for="tag in piece.tags"
                    >
                        {{ tag }}
                    </p>
                </div>
                <h1
                    class="hidden px-5 text-4xl underline md:px-10 lg:text-5xl xl:flex"
                >
                    {{ piece.title }}
                </h1>
                <h2
                    class="mb-5 hidden px-5 text-4xl md:px-10 lg:text-4xl xl:flex"
                >
                    {{ piece.date }}
                </h2>

                <ArtistItemHolder
                    class="hidden justify-center xl:flex"
                    v-if="artist"
                    :artist="artist"
                    route="/artists/"
                />
            </div>
        </section>
        <section class="rounded-xl bg-violet-200">
            <main class="text-center">
                <h1
                    class="p-5 text-4xl underline md:px-10 lg:text-5xl xl:hidden"
                >
                    {{ piece.title }}
                </h1>
                <h2 class="p-5 text-4xl md:px-10 lg:text-3xl xl:hidden">
                    {{ piece.date }}
                </h2>
                <ArtistItemHolder
                    v-if="artist"
                    class="flex justify-center xl:hidden"
                    :artist="artist"
                    route="/artists/"
                />
                <p
                    class="p-5 text-justify text-2xl sm:px-10 md:px-20 lg:px-20 lg:text-3xl xl:columns-2 xl:gap-20"
                >
                    {{ piece.description }}
                </p>
            </main>
        </section>
    </div>
    <div v-else>
        <section class="m-20 flex justify-center">
            <ProgressSpinner />
        </section>
    </div>
</template>
