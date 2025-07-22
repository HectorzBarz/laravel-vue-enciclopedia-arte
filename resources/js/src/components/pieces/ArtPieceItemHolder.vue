<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const props = defineProps({
    artPiece: Object,
});
</script>

<template>
    <ItemCardHolder>
        <template #item-image>
            <img
                :src="`/images/art-pieces/${artPiece.img}`"
                alt="art-piece-image"
                class="h-56 w-60 rounded-t-xl"
            />
        </template>
        <template #item-title>
            {{ artPiece.title }}
        </template>
        <template #item-date>
            {{ artPiece.date }}
        </template>
    </ItemCardHolder>
</template>
