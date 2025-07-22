<script setup>
const props = defineProps({
    item: Object,
});
</script>

<template>
    <div
        class="w-full cursor-pointer bg-violet-200 shadow-lg transition-all delay-50 hover:scale-110"
    >
        <img
            :src="`/images/${item.img}`"
            alt="art-piece-image"
            class="h-56 w-full rounded-t-xl"
        />

        <div class="w-full">
            <h4 class="mb-1 line-clamp-2 px-5 pt-1 text-lg">
                {{ item.title }}
            </h4>
            <p class="px-5 pt-1 text-base">
                {{ item.date }}
            </p>
        </div>
    </div>
    <!-- <div
        class="cursor-pointer shadow-lg transition-all delay-50 hover:scale-110"
    >
        <img
            src="/public/images/article/Impresionismo_ejemplo.jpg"
            alt="article-image"
            class="rounded-t-xl"
        />
        <div class="w-full bg-violet-200">
            <h4 class="mb-1 line-clamp-2 px-5 pt-1 text-lg">
                El Impresionismo es un movimiento artístico que empezó en el
                1872 y acabó en el 1882
            </h4>
            <p class="px-5 pt-1 text-base">16/07/2025</p>
        </div>
    </div> -->
</template>
