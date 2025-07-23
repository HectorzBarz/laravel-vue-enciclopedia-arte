<script setup>
import { useRoute } from "vue-router";
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const route = useRoute();
const id = route.params.id;
console.log(`HOLA DESDE DETALLES DE ARTÍCULO CON ID: ${{ id }}`);

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
</script>

<template>
    <div
        class="my-10 flex h-full flex-col rounded-2xl bg-violet-100 p-5 sm:mx-10 lg:mx-20 xl:mx-16 xl:flex-row"
    >
        <section>
            <div
                class="h-full w-full border-b-2 border-violet-200 px-5 py-5 lg:min-w-96 lg:border-b-0 xl:border-r-2"
            >
                <div class="">
                    <img
                        src="/public/images/artist/francisco-de-goya.jpg"
                        alt="artist-image"
                    />
                </div>
                <div class="">
                    <p class="mb-1 text-4xl">Francisco de Goya</p>
                    <p class="mb-2 text-2xl">España, 1746 - 1828</p>
                </div>
                <div class="flex gap-5">
                    <p
                        class="cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-xl transition-colors delay-100 hover:bg-violet-300"
                    >
                        Rococó
                    </p>
                    <p
                        class="cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-xl transition-colors delay-100 hover:bg-violet-300"
                    >
                        Neoclasicismo
                    </p>
                    <p
                        class="cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-xl transition-colors delay-100 hover:bg-violet-300"
                    >
                        Romanticismo
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="h-full w-full">
                <p class="m-5 columns-2 bg-violet-200 p-5 text-justify text-xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla nibh urna, pellentesque ac est vel, mollis convallis
                    urna. Suspendisse quis vestibulum nulla. Suspendisse
                    accumsan semper orci, a ullamcorper orci. Nunc nec justo ut
                    libero luctus auctor. Suspendisse et ligula a magna
                    vulputate pretium in sed est. Praesent magna augue, accumsan
                    non convallis eu, commodo sed nisi. Sed lobortis urna nisi,
                    eu sagittis felis facilisis placerat. Quisque fringilla
                    luctus turpis, tristique molestie turpis fermentum a.
                    Aliquam sit amet nulla at augue faucibus laoreet et sed
                    quam. Morbi suscipit, magna a porttitor suscipit, justo
                    felis cursus mi, sit amet lobortis nisl massa eget felis.
                    Nam hendrerit felis id erat elementum efficitur. Donec ut
                    nisi dui. Ut malesuada ligula ligula, sit amet bibendum odio
                    dapibus ac. Nam malesuada luctus dui, non dignissim orci
                    blandit sit amet. In molestie sed mauris sed sollicitudin.
                    Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia curae; Aenean dui dolor, viverra
                    porttitor felis ut, ultricies pharetra ipsum. Curabitur sed
                    auctor tortor. In eleifend est non sodales lobortis. Sed nec
                    lectus vitae erat viverra consectetur. Pellentesque ultrices
                    turpis at nibh varius dapibus quis non mi. Ut bibendum, nunc
                    eu lobortis gravida, ipsum massa luctus nibh, sit amet
                    finibus mi leo quis justo. Quisque lectus quam, sodales vel
                    arcu nec, vestibulum ornare ante. Cras vitae volutpat metus.
                    Duis dictum erat at felis lacinia iaculis vitae sed sapien.
                    Curabitur pellentesque, est at maximus fermentum, felis
                    justo finibus nulla, at consectetur libero ligula a dui.
                </p>
                <div class="flex justify-between p-10">
                    <ItemCardHolder
                        v-for="item in pieces"
                        :key="item.id"
                        :item="item"
                    />
                </div>
            </div>
        </section>
    </div>
</template>
