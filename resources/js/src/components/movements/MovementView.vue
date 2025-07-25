<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const movement = {
    id: 1,
    img: "movements/san-jeronimo-escribiendo.jpg",
    title: "Barroco",
    description: `El Barroco trasciende del arte. Fue un período cultural, científico, tecnológico, filosófico, político, económico… Aunque probablemente sea en el arte donde mejor se ilustra el clima del momento.

El siglo XVII nace con cambios políticos (los estados modernos), religiosos (la contrarreforma), tecnológicos (el telescopio), económicos (crisis) y sociales (la burguesía). Con esa atmósfera surge un estilo anti-clásico, menos racional y más apasionado, una reacción contra lo anterior como suele -y debe- pasar a lo largo de la historia del arte.

El arte se volvió dinámico, teatral, efectista. Busca sorprender, asombrar. Eso no quiere decir que se elimine el realismo. Todo lo contrario: se recrudece. En esa época de crisis económica, el hombre se enfrenta de forma más radical a la realidad.

Aún así se distorsiona todo, se violenta. Se potencian los contrastes (el tenebrismo) y el desequilibrio.`,
    start: 1600,
    end: 1750,
};

const pieces = [
    {
        id: 1,
        img: "pieces/impresion-sol-naciente.jpg",
        title: "Impresión, sol naciente",
        date: "1872",
        description: "",
        tags: [""],
    },
    {
        id: 2,
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "1833",
        description: "",
        tags: [""],
    },
    {
        id: 3,
        img: "pieces/ecce-hommo.jpg",
        title: "Ecce Homo",
        date: "1871",
        description: "",
        tags: [""],
    },
    {
        id: 4,
        img: "pieces/impresion-sol-naciente.jpg",
        title: "Impresión, sol naciente",
        date: "1872",
        description: "",
        tags: [""],
    },
    {
        id: 5,
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "1833",
        description: "",
        tags: [""],
    },
    {
        id: 6,
        img: "pieces/ecce-hommo.jpg",
        title: "Ecce Homo",
        date: "1871",
        description: "",
        tags: [""],
    },
    {
        id: 7,
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "1833",
        description: "",
        tags: [""],
    },
    {
        id: 8,
        img: "pieces/ecce-hommo.jpg",
        title: "Ecce Homo",
        date: "1871",
        description: "",
        tags: [""],
    },
];
</script>

<template>
    <div class="bg-violet-100 sm:mx-5 sm:p-5">
        <!-- seccion del contenido principal del movimiento  -->
        <div class="grid items-center justify-center xl:grid-cols-2">
            <section>
                <Image
                    :src="`/images/${movement.img}`"
                    alt="movement-image"
                    preview
                />
            </section>
            <main
                class="rounded-2xl bg-violet-200 p-5 text-center sm:mx-10 sm:p-10 xl:text-start"
            >
                <h1 class="text-6xl font-bold underline">
                    {{ movement.title }}
                    <h2 class="mb-5 text-3xl font-bold underline">
                        {{ movement.start }} - {{ movement.end }}
                    </h2>
                </h1>

                <div class="text-justify text-3xl xl:text-2xl 2xl:text-3xl">
                    <p>
                        {{ movement.description }}
                    </p>
                </div>
            </main>
        </div>
        <br />
        <!-- FIN seccion del contenido principal del movimiento  -->

        <!-- seccion obras representativas -->
        <section class="my-10">
            <h1 class="mb-10 text-center text-5xl underline sm:text-6xl">
                Obras representativas
            </h1>
            <div
                class="grid gap-y-10 rounded-2xl p-10 sm:mx-10 sm:px-20 md:grid-cols-2 md:gap-x-20 md:px-0 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-10 2xl:gap-x-28"
            >
                <ItemCardHolder
                    v-for="piece in pieces"
                    :key="piece.id"
                    :item="piece"
                    route="/art-piece/"
                />
            </div>
        </section>
        <!-- FIN seccion obras representativas -->
    </div>
</template>
