<script setup>
import ItemCardHolder from "../layouts/ItemCardHolder.vue";

const artist = {
    id: 1,
    name: "Francisco de Goya",
    movements: ["Rococó", "Neoclasicismo", "Romanticismo"],
    country: "España",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
                    justo finibus nulla, at consectetur libero ligula a dui.`,
    startYear: 1746,
    lastYear: 1828,
    img: "artist/francisco-de-goya.jpg",
};

const pieces = [
    {
        id: 1,
        img: "pieces/impresion-sol-naciente.jpg",
        title: "Impresión, sol naciente",
        date: "22/07/2025",
        description: "",
        tags: [""],
    },
    {
        id: 2,
        img: "pieces/la-ejecucion-de-lady-jane-grey.jpg",
        title: "La Ejecución de Lady Jane Grey",
        date: "22/07/2025",
        description: "",
        tags: [""],
    },
    {
        id: 3,
        img: "pieces/ecce-hommo.jpg",
        title: "Ecce Homo",
        date: "22/07/2025",
        description: "",
        tags: [""],
    },
];
</script>

<template>
    <div
        class="my-10 flex h-full flex-col rounded-2xl bg-violet-100 sm:p-5 lg:mx-20 xl:mx-16 xl:flex-row"
    >
        <section class="border-b-2 border-violet-200 xl:border-0">
            <div
                class="flex h-full w-full flex-col items-center border-violet-200 px-5 py-5 lg:min-w-96 lg:flex-row lg:items-start lg:justify-start lg:border-b-0 xl:flex-col xl:border-r-2"
            >
                <div>
                    <Image
                        :src="`/images/${artist.img}`"
                        alt="artist-image"
                        preview
                    />
                </div>
                <div class="px-5 py-5">
                    <p class="mb-1 text-4xl">{{ artist.name }}</p>
                    <p class="mb-2 text-2xl">
                        {{ artist.country }}, {{ artist.startYear }} -
                        {{ artist.lastYear }}
                    </p>
                    <div
                        class="flex flex-col gap-5 text-center sm:flex-row sm:text-start"
                    >
                        <p
                            class="cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-xl transition-colors delay-100 hover:bg-violet-300"
                            v-for="item in artist.movements"
                        >
                            {{ item }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="h-full w-full">
                <p
                    class="mx-1 my-5 rounded-md bg-violet-200 p-5 text-justify text-xl sm:m-5 sm:mx-10 md:columns-2"
                >
                    {{ artist.description }}
                </p>
                <div
                    class="flex flex-col justify-between gap-10 p-10 sm:p-26 md:flex-row md:justify-around md:px-10 md:py-5"
                >
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
