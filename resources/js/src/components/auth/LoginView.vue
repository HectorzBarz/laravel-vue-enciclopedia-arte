<script setup></script>

<template>
    <section class="h-full w-full bg-red-200 p-44">
        <div
            class="grid grid-cols-2 rounded-xl border bg-violet-100 px-5 py-10"
        >
            <!-- bloque del formualario a rellenar -->
            <div
                class="items-base grid border-r-2 border-violet-200 bg-green-100 px-10 py-5"
            >
                <form name="login-form">
                    <!-- input de email -->
                    <div class="mb-10 flex flex-col bg-pink-300">
                        <label for="username" class="text-2xl"
                            >Correo electrónico:
                        </label>
                        <input
                            id="email"
                            type="email"
                            class="h-12 border px-2 text-xl"
                            placeholder="Introduce tu correo electrónico..."
                        />
                    </div>
                    <!-- FIN input de email -->

                    <!-- input de password -->
                    <div class="mb-4 flex flex-col bg-cyan-200">
                        <label for="password" class="text-2xl"
                            >Contraseña:
                        </label>
                        <input
                            id="password"
                            type="password"
                            class="h-12 border px-2 text-xl"
                            placeholder="Introduce tu contraseña..."
                        />
                    </div>
                    <!-- FIN input de password -->

                    <!-- botón login -->
                    <button
                        class="mb-2 cursor-pointer rounded-full border bg-yellow-100 px-2.5 py-1 text-xl hover:bg-yellow-200"
                        type="submit"
                    >
                        Ingresar
                    </button>
                    <!-- FIN botón login -->

                    <p class="text-md">
                        ¿Ya tienes cuenta? Accede a ella:
                        <RouterLink
                            to="/login"
                            class="text-blue-700 no-underline hover:underline"
                        >
                            Aquí
                        </RouterLink>
                    </p>
                </form>
            </div>
            <!-- FIN bloque del formualario a rellenar -->

            <!-- bloque de la imagén de inicio de sesión -->
            <div class="bg-orange-300">
                <h1>Imagén</h1>
            </div>
            <!-- FIN bloque de la imagén de inicio de sesión -->
        </div>
    </section>
</template>
