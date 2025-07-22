<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const props = defineProps({
    artist: Object,
});
</script>

<template>
    <ItemCardHolder>
        <template #item-image>
            <img
                :src="`/images/artist/${artist.img}`"
                alt="artist-image"
                class="h-56 w-60 rounded-t-xl"
            />
        </template>
        <template #item-title>
            {{ artist.title }}
        </template>
        <template #item-date>
            {{ artist.date }}
        </template>
    </ItemCardHolder>
</template>
