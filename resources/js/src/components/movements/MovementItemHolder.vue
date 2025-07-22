<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const props = defineProps({
    movement: Object,
});
</script>

<template>
    <ItemCardHolder>
        <template #item-image>
            <img
                :src="`/images/movements/${movement.img}`"
                alt="movement-image"
                class="h-56 w-60 rounded-t-xl"
            />
        </template>
        <template #item-title>
            {{ movement.title }}
        </template>
        <template #item-date>
            {{ movement.date }}
        </template>
    </ItemCardHolder>
</template>
