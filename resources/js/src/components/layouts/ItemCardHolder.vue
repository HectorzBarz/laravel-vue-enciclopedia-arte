<script setup>
const props = defineProps({
    item: Object,
    route: String,
});
</script>

<template>
    <RouterLink :to="`${route}${item.id}`">
        <div
            class="w-full cursor-pointer bg-violet-200 shadow-lg transition-all delay-50 hover:scale-110"
        >
            <img
                :src="`/images/${item.img}`"
                alt="art-piece-image"
                class="h-56 w-full 2xl:h-60"
            />

            <div class="w-full">
                <h4 class="mb-1 line-clamp-2 px-5 pt-1 text-lg">
                    {{ item.title }}
                </h4>
                <div class="flex justify-between">
                    <p class="px-5 pt-1 text-base" v-if="item.start">
                        {{ item.start }} - {{ item.end }}
                    </p>
                    <p class="px-5 pt-1 text-base" v-else>
                        {{ item.date }}
                    </p>
                    <p class="px-5 pt-1 text-base" v-if="item.type">
                        {{ item.type }}
                    </p>
                </div>
            </div>
        </div>
    </RouterLink>
</template>
