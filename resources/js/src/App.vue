<script setup lang="ts">
import HomeView from "./components/HomeView.vue";
import DefaultView from "./components/layouts/DefaultView.vue";
</script>

<template>
    <!-- App.vue apunta a el componente de DefaultView para renderizar el Home directamente cada vez que carga -->
    <DefaultView />
</template>
