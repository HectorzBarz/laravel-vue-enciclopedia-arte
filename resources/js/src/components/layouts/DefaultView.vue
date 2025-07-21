<script setup>
import HomeView from "../HomeView.vue";
import Navbar from "./Navbar.vue";
</script>

<template>
    <header>
        <Navbar />
    </header>

    <!-- named slot for the body of the page -->

    <body>
        <RouterView />
    </body>
</template>

<style scoped></style>
