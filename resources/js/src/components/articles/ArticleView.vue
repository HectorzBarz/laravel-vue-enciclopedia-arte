<script setup>
const article = {
    id: 1,
    img: "article/drives-me-crazy.jpg",
    title: "Anna Weyant conquista el Thyssen: una mirada contemporánea con alma antigua",
    description: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
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
                ac.

                Nam neque metus, aliquet et luctus in, commodo ac sapien.
                Curabitur at metus condimentum ipsum dapibus sodales imperdiet
                vel elit. Curabitur cursus mauris a velit fringilla finibus.
                Proin non nulla varius, facilisis libero vitae, mattis est.
                Nullam suscipit orci quis velit pretium, at placerat odio
                consectetur. Ut est metus, venenatis non fermentum et, iaculis
                auctor erat. Nullam ut enim pulvinar, elementum sem ac, vehicula
                dui.`,
    date: "14/07/2025 11:23",
    type: "Artistas",
};
</script>

<template>
    <div class="my-10 rounded-xl bg-violet-100 sm:mx-5 sm:p-5">
        <section
            class="mx-1 mb-5 md:mx-5 lg:mx-20 xl:mx-5 xl:grid xl:items-center"
        >
            <Image
                :src="`/images/${article.img}`"
                alt="piece-image"
                class="content-center"
                preview
            />

            <h1 class="p-5 text-center text-4xl underline md:px-10 lg:text-5xl">
                {{ article.title }}
            </h1>
            <main class="rounded-lg bg-violet-200 text-center">
                <p
                    class="p-5 text-justify text-2xl sm:px-10 md:px-20 lg:px-20 lg:text-3xl xl:columns-2 xl:gap-20"
                >
                    {{ article.description }}
                </p>
            </main>
            <p
                class="text-start text-2xl sm:mx-16 sm:text-start md:mx-36 lg:mx-40 xl:mx-40"
            >
                {{ article.date }}
            </p>
        </section>
    </div>
</template>
