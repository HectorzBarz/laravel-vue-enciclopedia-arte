<script setup>
const piece = {
    id: 1,
    img: "pieces/impresion-sol-naciente.jpg",
    title: "Impresión, sol naciente",
    date: "1872",
    description: `"Impresión, sol naciente" es una de las obras más
                    emblemáticas de Claude Monet y, sin duda, una de las más
                    influyentes en la historia del arte moderno. Pintada en 1872
                    desde la ventana de un hotel en el puerto de Le Havre, su
                    ciudad natal, esta pintura no solo captura un momento fugaz
                    del amanecer sobre el agua, sino que también dio nombre a
                    todo un movimiento artístico: el impresionismo. El título de
                    la obra, elegido casi de manera casual por Monet, fue tomado
                    por un crítico con tono burlón, pero terminó definiendo una
                    revolución estética. La escena muestra un puerto envuelto en
                    una neblina matinal, donde los contornos de los barcos,
                    grúas y chimeneas industriales apenas se distinguen entre
                    los tonos azulados y grises del cielo y el agua. En el
                    centro, el sol aparece como un disco anaranjado vibrante,
                    reflejándose en el mar con una pincelada vertical que rompe
                    la quietud del entorno. Monet no busca representar con
                    precisión los detalles del paisaje, sino transmitir la
                    sensación visual del instante, la atmósfera cambiante y la
                    luz efímera del amanecer. Lo más innovador de esta obra es
                    su técnica. Monet utiliza pinceladas sueltas, rápidas y
                    visibles, que dan una textura vibrante a la superficie del
                    lienzo. La perspectiva es casi plana, y la profundidad se
                    sugiere más por el color que por el dibujo. No hay líneas
                    definidas ni sombras negras; en su lugar, el artista emplea
                    tonos fríos y cálidos para sugerir volumen y distancia. Esta
                    forma de pintar rompía con las convenciones académicas de la
                    época, que valoraban la precisión, el acabado pulido y los
                    temas históricos o mitológicos. "Impresión, sol naciente" no
                    solo representa un paisaje, sino también una nueva forma de
                    ver y de pintar. Es una declaración de principios: el arte
                    ya no tiene que imitar la realidad de forma literal, sino
                    que puede capturar la experiencia subjetiva del artista
                    frente al mundo. Esta obra marcó el inicio de una nueva era
                    en la pintura, donde la percepción, la luz y el instante se
                    convirtieron en protagonistas.`,
    tags: ["Impresionismo", "Revolucionario", "Pan", "Patata"],
};
</script>

<template>
    <div class="my-10 rounded-xl bg-violet-100 sm:mx-5 sm:p-5">
        <section class="mx-1 mb-5 md:mx-5 lg:mx-20 xl:mx-5 xl:flex">
            <Image
                :src="`/images/${piece.img}`"
                alt="piece-image"
                class="content-center"
                preview
            />
            <div
                class="mb-5 sm:px-5 md:mb-10 xl:content-center xl:items-center"
            >
                <div class="my-5 grid gap-2 sm:flex sm:justify-around">
                    <p
                        class="mx-10 cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-center text-xl transition-colors delay-100 hover:bg-violet-300 sm:mx-0 lg:text-2xl"
                        v-for="tag in piece.tags"
                    >
                        {{ tag }}
                    </p>
                </div>
                <h1
                    class="hidden px-5 text-4xl underline md:px-10 lg:text-5xl xl:flex"
                >
                    {{ piece.title }}
                </h1>
            </div>
        </section>
        <section class="rounded-xl bg-violet-200">
            <main class="text-center">
                <h1
                    class="p-5 text-4xl underline md:px-10 lg:text-5xl xl:hidden"
                >
                    {{ piece.title }}
                </h1>
                <p
                    class="p-5 text-justify text-2xl sm:px-10 md:px-20 lg:px-20 lg:text-3xl xl:columns-2 xl:gap-20"
                >
                    {{ piece.description }}
                </p>
            </main>
        </section>
    </div>
</template>
