<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const props = defineProps({
    article: Object,
});
</script>

<template>
    <ItemCardHolder>
        <template #item-image>
            <img
                :src="`/images/article/${article.img}`"
                alt="article-image"
                class="h-56 w-full rounded-t-xl"
            />
        </template>
        <template #item-title>
            {{ article.title }}
        </template>
        <template #item-date>
            {{ article.date }}
        </template>
    </ItemCardHolder>
</template>
