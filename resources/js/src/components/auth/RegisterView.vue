<script setup>
import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const router = useRouter();

const form = ref({
    username: "",
    email: "",
    password: "",
});

const csrfToken = ref("");
const errorMessage = ref("");

const registerUser = async () => {
    try {
        await axios.get("/sanctum/csrf-cookie"); // Esto configura automáticamente el token CSRF en cookies

        await axios.post("/api/register", form.value, {
            withCredentials: true,
        });

        alert("Usuario registrado con éxito");
        router.push("/");
    } catch (error) {
        console.error("Error al registrar:", error);
        errorMessage.value =
            error.response?.data?.message || "Error desconocido al registrar";
    }
};
</script>

<template>
    <section class="h-full w-full px-5 py-32 xl:p-32">
        <div
            class="grid items-center rounded-l-sm rounded-r-sm bg-violet-100 px-5 py-10 lg:grid-cols-2 xl:rounded-xl"
        >
            <form
                @submit.prevent="registerUser"
                class="border-r-2 border-violet-200 pr-10"
            >
                <input type="hidden" :value="csrfToken" name="_token" />

                <div class="mb-10 flex flex-col">
                    <label for="username" class="text-2xl">Username:</label>
                    <input
                        v-model="form.username"
                        type="text"
                        class="h-12 rounded-sm border bg-white px-2 text-xl"
                        id="username"
                        autocomplete="username"
                        required
                    />
                </div>

                <div class="mb-10 flex flex-col">
                    <label for="email" class="text-2xl">Email:</label>
                    <input
                        v-model="form.email"
                        type="email"
                        id="email"
                        class="h-12 rounded-sm border bg-white px-2 text-xl"
                        autocomplete="email"
                        required
                    />
                </div>

                <div class="mb-4 flex flex-col">
                    <label for="password" class="text-2xl">Password:</label>
                    <input
                        v-model="form.password"
                        type="password"
                        id="password"
                        class="h-12 rounded-sm border bg-white px-2 text-xl"
                        autocomplete="new-password"
                        required
                    />
                </div>

                <div class="flex items-center justify-center">
                    <!-- botón login -->
                    <button
                        class="mb-2 cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-300 lg:w-[50%]"
                        type="submit"
                    >
                        Registrarse
                    </button>
                    <!-- FIN botón login -->
                </div>
                <div>
                    <div class="my-4 flex items-center justify-center">
                        <div class="h-px w-[20%] bg-black"></div>
                        <span class="mx-4 text-center text-xl font-bold"
                            >¿Ya tienes cuenta?</span
                        >
                        <div class="h-px w-[20%] bg-black"></div>
                    </div>

                    <div class="flex justify-center">
                        <!-- botón de redirección a registro -->
                        <button
                            class="mb-2 cursor-pointer rounded-sm border bg-violet-300 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-400 lg:w-[50%]"
                        >
                            <RouterLink to="/login"> ¡Ingresa! </RouterLink>
                        </button>
                        <!-- FIN botón de redirección a registro -->
                    </div>
                </div>

                <p v-if="errorMessage" style="color: red">{{ errorMessage }}</p>
            </form>
            <!-- bloque de la imagén de inicio de sesión -->
            <div
                class="hidden h-full w-full items-center justify-center lg:flex"
            >
                <img
                    src="/public/images/auth/pisa_tower.png"
                    alt="auth-image"
                />
            </div>
            <!-- FIN bloque de la imagén de inicio de sesión -->
        </div>
    </section>
</template>
