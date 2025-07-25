<script></script>

<template>
    <!-- seccion de contacto -->
    <section
        class="my-16 flex flex-col rounded-2xl bg-violet-100 md:mx-10 lg:mx-20 lg:flex-row xl:m-36"
    >
        <!-- barra lateral con avatar y iconos redireccionando a mis perfiles -->

        <div class="my-5 h-full w-fit p-5">
            <Image alt="Image">
                <template #image>
                    <div class="mb-5 flex justify-center">
                        <img
                            src="/public/images/contact/hector.jpg"
                            alt="Image"
                            class="h-full w-[75%] rounded-full border"
                        />
                    </div>
                </template>
            </Image>
            <h1 class="flex justify-around text-3xl">Puedes encontrarme en:</h1>
            <div class="flex justify-around py-5">
                <a
                    href="https://www.instagram.com/hectorzbarz/"
                    target="_blank"
                >
                    <i
                        class="pi pi-instagram transition-colors hover:cursor-pointer hover:text-violet-500"
                        style="font-size: 2.5rem"
                    />
                </a>
                <a href="https://x.com/BarzHector" target="_blank">
                    <i
                        class="pi pi-twitter transition-colors hover:cursor-pointer hover:text-violet-500"
                        style="font-size: 2.5rem"
                    />
                </a>

                <a href="https://github.com/HectorzBarz" target="_blank">
                    <i
                        class="pi pi-github transition-colors hover:cursor-pointer hover:text-violet-500"
                        style="font-size: 2.5rem"
                    />
                </a>
            </div>
        </div>

        <!-- FIN barra lateral con avatar y iconos redireccionando a mis perfiles -->

        <!-- cuerpo de la sección de contacto -->
        <div
            class="my-5 h-full w-full border-t-2 border-violet-200 lg:border-t-0 lg:border-l-2"
        >
            <h1
                class="py-16 text-center text-6xl underline underline-offset-4 md:px-10 lg:text-start"
            >
                Héctor Rodríguez Barroso
            </h1>
            <h2
                class="mx-5 my-5 rounded-sm border bg-violet-200 p-2 text-3xl md:mx-20 lg:mx-10 xl:mx-20"
            >
                Buenas, <br />
                Soy Héctor Rodríguez, un estudiante de Desarrollo de
                Aplicaciones Web. <br />
                Actualmente estoy practicando en Saint-Gobain Sekurit, Arboç en
                España. Este es un proyecto de práctica dedicado a una persona
                en concreto... <br /><br />
                ¡En un futuro planeo desarrollar más proyectos para pulir mis
                habilidades y aprender cada vez más sobre el mundo de la
                programación!
            </h2>
        </div>
        <!-- FIN cuerpo de la sección de contacto -->
    </section>
    <!-- FIN seccion de contacto -->
</template>
