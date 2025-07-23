<script setup>
import { useRoute } from "vue-router";

const route = useRoute();
const id = route.params.id;
console.log(`HOLA DESDE DETALLES DE ARTÍCULO CON ID: ${{ id }}`);
</script>

<template>
    <!-- seccion imagen articulo -->

    <section
        class="relative my-10 flex h-full w-full flex-wrap items-center justify-center"
    >
        <img
            src="/public/images/article/Impresionismo_ejemplo.jpg"
            alt="article-image"
        />
    </section>
    <!-- FIN seccion imagen articulo -->
    <main>
        <div
            class="my-5 flex flex-col justify-center rounded-lg bg-violet-100 py-5 text-center md:mx-16 xl:mx-52 2xl:mx-72"
        >
            <h1 class="mb-10 text-6xl">Título</h1>
            <p
                class="mb-10 text-4xl sm:mx-16 md:mx-20 md:border-l-2 md:px-5 lg:mx-40 xl:mx-40"
            >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                vitae turpis id lacus dictum lacinia volutpat ut velit. Cras
                vitae lorem imperdiet risus viverra commodo. In malesuada
                posuere turpis, ut commodo felis efficitur et. In pharetra
                tellus vitae porttitor vehicula. Donec ut eros bibendum,
                pharetra leo eget, semper sapien. Morbi quis lacinia quam. In
                dictum eros a elementum lacinia. Phasellus sit amet consequat
                lectus, id ultricies nisl. Integer porttitor sapien eu varius
                fermentum. Proin ullamcorper rhoncus mauris, ut viverra est
                convallis cursus. Quisque at posuere ipsum. Integer turpis nunc,
                efficitur vel euismod et, sodales nec urna. Sed gravida ex id
                sodales vehicula. Pellentesque imperdiet purus congue, convallis
                odio ac, tincidunt enim. Quisque consequat non ligula in
                molestie. Praesent pulvinar metus mi, at pharetra velit tempor
                ac. <br /><br />

                Nam neque metus, aliquet et luctus in, commodo ac sapien.
                Curabitur at metus condimentum ipsum dapibus sodales imperdiet
                vel elit. Curabitur cursus mauris a velit fringilla finibus.
                Proin non nulla varius, facilisis libero vitae, mattis est.
                Nullam suscipit orci quis velit pretium, at placerat odio
                consectetur. Ut est metus, venenatis non fermentum et, iaculis
                auctor erat. Nullam ut enim pulvinar, elementum sem ac, vehicula
                dui.
            </p>
            <p
                class="text-center text-2xl sm:mx-16 sm:text-start md:mx-36 lg:mx-40 xl:mx-40"
            >
                23/07/20205 11:23
            </p>
        </div>
    </main>
</template>
