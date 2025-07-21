<script setup>
import ItemCardHolder from "./layouts/ItemCardHolder.vue";
import Quoue from "./home/Quoue.vue";
</script>

<template>
    <!-- sección de explicación de qué va la página -->
    <Quoue />

    <!-- main, donde va el contenido, principalmente las cartas de los artículos -->
    <main>
        <!-- contenedor de todas las secciones del main -->
        <div
            class="mx-12 my-5 flex flex-col rounded-2xl bg-violet-100 lg:mx-14 xl:mx-24 xl:flex-row xl:items-center 2xl:mx-32"
        >
            <!-- contenedor de las secciones "Obras", "Artistas" y "Artículos Recientes"-->
            <div class="w-full">
                <!-- seccion de "Obras" -->
                <section id="pieces-articles" class="my-5">
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Obras
                    </h3>

                    <div
                        class="grid justify-center gap-5 px-5 sm:flex md:px-10"
                    >
                        <ItemCardHolder />
                        <ItemCardHolder />
                        <ItemCardHolder />
                    </div>
                </section>

                <!-- seccion de "Artistas" -->
                <section
                    id="artists-article"
                    class="my-5 border-t-2 border-violet-200 py-2"
                >
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Artistas
                    </h3>

                    <div
                        class="grid justify-center gap-5 px-5 sm:flex md:px-10"
                    >
                        <ItemCardHolder />
                        <ItemCardHolder />
                        <ItemCardHolder />
                    </div>
                </section>

                <!-- seccion de movimientos artísticos -->
                <section
                    id="articles"
                    class="my-5 border-t-2 border-violet-200 py-2"
                >
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Movimientos Artísticos
                    </h3>

                    <div
                        class="grid justify-center gap-5 px-5 sm:flex md:px-10"
                    >
                        <ItemCardHolder />
                        <ItemCardHolder />
                        <ItemCardHolder />
                    </div>
                </section>
            </div>
            <!-- FIN contenedor de las secciones "Obras" y "Artistas" -->

            <!-- contenedor de los artículos recientes -->
            <div class="w-full">
                <section
                    id="articles"
                    class="border-t-2 border-violet-200 py-2 xl:border-t-0 xl:border-l-2 xl:py-32 2xl:my-5"
                >
                    <h3 class="font-soul mb-2.5 text-center text-3xl font-bold">
                        Artículos recientes
                    </h3>

                    <div class="grid gap-5 px-5 sm:grid-cols-2 md:px-10">
                        <ItemCardHolder />
                        <ItemCardHolder />
                        <ItemCardHolder />
                        <ItemCardHolder />
                    </div>
                </section>
            </div>
            <!-- FIN contenedor de los artículos recientes -->
        </div>
        <!-- FIN contenedor de todas las secciones del main -->
    </main>
</template>
