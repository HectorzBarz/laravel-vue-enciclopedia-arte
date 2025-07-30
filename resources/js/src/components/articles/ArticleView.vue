<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRoute } from "vue-router";

const route = useRoute();
const article = ref(null);

onMounted(async () => {
    try {
        const response = await axios.get(`/api/articles/${route.params.id}`);
        article.value = response.data;
    } catch (error) {
        console.error("Error al cargar el artista:", error);
    }
});
</script>

<template>
    <div class="my-10 rounded-xl bg-violet-100 sm:mx-5 sm:p-5" v-if="article">
        <section
            class="mx-1 mb-5 md:mx-5 lg:mx-20 xl:mx-5 xl:grid xl:items-center"
        >
            <Image
                :src="`/images/${article.img}`"
                alt="piece-image"
                class="content-center justify-center"
                preview
            />

            <h1 class="p-5 text-center text-4xl underline md:px-10 lg:text-5xl">
                {{ article.title }}
            </h1>
            <main class="rounded-lg bg-violet-200 text-center">
                <p
                    class="p-5 text-justify text-2xl sm:px-10 md:px-20 lg:px-20 lg:text-3xl xl:columns-2 xl:gap-20"
                >
                    {{ article.description }}
                </p>
            </main>
            <p
                class="text-start text-2xl sm:mx-16 sm:text-start md:mx-36 lg:mx-40 xl:mx-40"
            >
                {{ article.date }}
            </p>
        </section>
    </div>
    <div v-else>
        <section class="m-20 flex justify-center">
            <ProgressSpinner />
        </section>
    </div>
</template>
