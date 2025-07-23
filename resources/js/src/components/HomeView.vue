<script setup>
import ItemCardHolder from "./layouts/ItemCardHolder.vue";
import Quoue from "./home/Quoue.vue";
import { useRouter } from "vue-router";

const router = useRouter();

const articles = [
    {
        id: 1,
        img: "article/weyant-festejada.jpg",
        title: "Anna Weyant conquista el Thyssen: una mirada contemporánea con alma antigua",
        date: "14/07/2025",
        type: "Artistas",
    },
    {
        id: 2,
        img: "article/tesoro-de-dahomey.jpg",
        title: "El retorno del tesoro de Dahomey: justicia histórica en Benín",
        date: "16/05/2025",
        type: "Obras",
    },
    {
        id: 3,
        img: "article/jardin-de-las-delicias.jpg",
        title: "El secreto del cuadro más mirado del Prado: “El jardín de las delicias”",
        date: "16/04/2025",
        type: "Obras",
    },
    {
        id: 4,
        img: "article/ides-kihlen.jpg",
        title: "Ides Kihlen cumple 108 años: la pintora más longeva del arte argentino",
        date: "10/07/2025",
        type: "Artistas",
    },
];

const artists = [
    {
        id: 1,
        img: "artist/francisco-de-goya.jpg",
        title: "Francisco de Goya",
        date: "1746–1828",
    },
    {
        id: 2,
        img: "artist/diego-velazquez.jpg",
        title: "Diego Velázquez",
        date: "1599–1660",
    },
    {
        id: 3,
        img: "artist/el-greco.jpg",
        title: "El Greco",
        date: "1541–1614",
    },
];

const pieces = [
    {
        id: 1,
        img: "pieces/impresion-sol-naciente.jpg",
        title: "Impresión, sol naciente",
        date: "22/07/2025",
    },
    {
        id: 2,
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "22/07/2025",
    },
    {
        id: 3,
        img: "pieces/ecce-hommo.jpg",
        title: "Ecce Homo",
        date: "22/07/2025",
    },
];

const movements = [
    {
        id: 1,
        img: "movements/san-jeronimo-escribiendo.jpg",
        title: "Barroco",
        date: "1600–1750",
    },
    {
        id: 2,
        img: "movements/la-muerte-de-viriato.jpg",
        title: "Neoclasicismo",
        date: "1750–1820",
    },
    {
        id: 3,
        img: "movements/paseo-por-el-acantilado-de-pourville.jpg",
        title: "Impresionismo",
        date: "1872–1882",
    },
];
</script>

<template>
    <!-- sección de explicación de qué va la página -->
    <Quoue />

    <!-- main, donde va el contenido, principalmente las cartas de los artículos -->
    <main>
        <!-- contenedor de todas las secciones del main -->
        <div
            class="my-5 flex flex-col rounded-2xl bg-violet-100 md:mx-12 lg:mx-14 xl:mx-0 xl:flex-row xl:items-center 2xl:mx-12"
        >
            <!-- contenedor de las secciones "Obras", "Artistas" y "Artículos Recientes"-->
            <div class="w-full">
                <!-- seccion de "Obras" -->
                <section id="pieces-articles" class="my-5">
                    <h3 class="font-soul mb-2.5 text-center text-2xl font-bold">
                        Obras
                    </h3>

                    <div
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="piece in pieces"
                            :key="piece.id"
                            :item="piece"
                            route="/art-piece/"
                        >
                        </ItemCardHolder>
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
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="artist in artists"
                            :key="artist.id"
                            :item="artist"
                            route="/artists/"
                        />
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
                        class="grid justify-around gap-10 px-5 sm:flex md:px-10 lg:grid-cols-3"
                    >
                        <ItemCardHolder
                            v-for="(movement, index) in movements"
                            :key="index"
                            :item="movement"
                            route="/movements/"
                        />
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

                    <div
                        class="grid justify-around gap-10 px-20 py-2 sm:grid-cols-2 md:px-10 lg:px-24 xl:px-16 xl:py-0"
                    >
                        <ItemCardHolder
                            v-for="(article, index) in articles"
                            :key="index"
                            :item="article"
                            route="/articles/"
                        />
                    </div>
                </section>
            </div>
            <!-- FIN contenedor de los artículos recientes -->
        </div>
        <!-- FIN contenedor de todas las secciones del main -->
    </main>
</template>
