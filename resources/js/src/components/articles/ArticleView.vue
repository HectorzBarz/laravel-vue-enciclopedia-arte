<script setup>
import { useRoute } from "vue-router";

const route = useRoute();
const id = route.params.id;
</script>

<template>
    <h1 class="text-6xl">HOLA DESDE DETALLES DE ARTÍCULO CON ID: {{ id }}</h1>
</template>
