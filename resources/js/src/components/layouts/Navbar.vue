<script setup>
import { ref } from "vue";
import { RouterLink } from "vue-router";
import { useSearchStore } from "../../stores/SearchStore";
import { useRouter } from "vue-router";

const store = useSearchStore();
const router = useRouter();

const menuVisible = ref(false);

const menu = [
    { name: "Inicio", route: "/" },
    { name: "Artículos", route: "/search" },
    { name: "Artistas", route: "/search" },
    { name: "Obras", route: "/search" },
    { name: "Movimientos", route: "/search" },
    { name: "Contáctame", route: "/contact" },
];

function toggleMenu() {
    menuVisible.value = !menuVisible.value;
}

function handleClick(item) {
    // Reinicia todos los checkboxes
    store.checked.forEach((opt) => {
        opt.checked = opt.name === item.name;
    });

    // Redirige a la ruta correspondiente
    router.push(item.route);
}
</script>

<template>
    <!-- navbar -->
    <nav>
        <div
            class="relative flex h-24 max-h-24 items-center justify-between bg-violet-300 p-5 shadow-lg shadow-gray-300"
        >
            <div class="flex items-center">
                <!-- burger menu icon en caso de que el ancho baje -->
                <img
                    src="/public/images/navbar/Hamburger_icon.svg.png"
                    alt="hamburguer-menu"
                    class="h-10 cursor-pointer sm:hidden"
                    @click="toggleMenu"
                />

                <!-- logo de la página -->
                <RouterLink to="/">
                    <img
                        src="/public/images/navbar/logo.png"
                        alt=""
                        class="hidden w-20 sm:flex sm:h-full"
                    />
                </RouterLink>

                <!-- titulo de la pagina -->
                <h1 class="mx-5 text-xl sm:text-2xl">Enciclopedia de arte</h1>
            </div>
            <!-- <div class="hidden items-center gap-5 text-xl lg:flex">
                <h1 class="">Barra de búsqueda</h1>
                <img
                    src="/public/images/navbar/magnifying-glass.png"
                    alt="search-icon"
                    class="h-7 w-7"
                />
            </div> -->
            <RouterLink to="/login">
                <div class="flex">
                    <button
                        class="hidden px-2.5 py-1 text-xl transition-colors delay-100 sm:flex sm:cursor-pointer sm:rounded-sm sm:border sm:bg-violet-200 sm:hover:bg-purple-300"
                    >
                        Ingresar
                    </button>
                    <i
                        class="pi pi-user mx-2 my-1 items-center"
                        style="font-size: 2rem"
                    />
                </div>
            </RouterLink>
        </div>
    </nav>
    <!-- FIN navbar -->

    <!-- en caso de que menuVisible = true se desplegara el siguiente dropdown -->
    <transition
        enter-active-class="transition ease-out duration-300"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-in duration-200"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-2"
    >
        <div v-if="menuVisible" class="absolute w-full sm:hidden">
            <ul
                class="rounded-b-md bg-violet-300 px-2 text-xl shadow-lg shadow-gray-600"
            >
                <li
                    class="cursor-pointer py-1 hover:text-violet-400 hover:underline"
                    v-for="item of menu"
                    @click="handleClick(item)"
                >
                    {{ item.name }}
                </li>
            </ul>
        </div>
    </transition>
    <!-- fin del dropdown inicial -->

    <!-- menu de los items corrientes del menu cuando la resolución es adecuada      -->
    <section
        class="hidden sm:mx-5 sm:my-5 sm:flex sm:justify-between lg:justify-end lg:gap-5"
    >
        <div v-for="item of menu" class="flex">
            <button
                class="cursor-pointer gap-1 px-2.5 py-2 text-xl transition-colors delay-100 hover:text-violet-500 hover:underline"
                @click="handleClick(item)"
            >
                {{ item.name }}
            </button>
        </div>
    </section>

    <!-- fin del menu correiente de items -->
</template>
