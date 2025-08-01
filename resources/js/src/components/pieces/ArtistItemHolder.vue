<script setup>
// artist data
const props = defineProps({
    artist: Object,
    route: String,
});
</script>

<template>
    <!-- si el artista existe enseña la ruta -->
    <RouterLink v-if="artist" :to="`${route}${artist.id}`">
        <!-- carta artista -->
        <div
            class="flex w-fit bg-violet-300 pr-5 xl:bg-violet-200"
            v-if="artist"
        >
            <img
                :src="`/images/${artist.img}`"
                alt="image"
                class="h-20 w-fit"
            />
            <section class="flex flex-col justify-center p-1">
                <h1>{{ artist.title }}</h1>
                <div>
                    <h1>
                        {{ artist.country }}, {{ artist.start }} -
                        {{ artist.end }}
                    </h1>
                </div>
            </section>
        </div>
        <div v-else>
            <p>Cargando artista...</p>
        </div>
        <!-- FIN carta artista -->
    </RouterLink>
</template>
