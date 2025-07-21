<script setup></script>

<template>
    <section class="h-full w-full grid-cols-2 p-32">
        <div
            class="grid grid-cols-2 rounded-xl border bg-violet-100 px-5 py-10"
        >
            <!-- bloque del formualario a rellenar -->
            <div
                class="items-base grid border-r-2 border-violet-200 px-10 py-5"
            >
                <form name="login-form">
                    <!-- input de email -->
                    <div class="mb-10 flex flex-col">
                        <label for="username" class="text-2xl"
                            >Correo electrónico:
                        </label>
                        <input
                            id="email"
                            type="email"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu correo electrónico..."
                        />
                    </div>
                    <!-- FIN input de email -->

                    <!-- input de password -->
                    <div class="mb-4 flex flex-col">
                        <label for="password" class="text-2xl"
                            >Contraseña:
                        </label>
                        <input
                            id="password"
                            type="password"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu contraseña..."
                        />
                    </div>
                    <!-- FIN input de password -->

                    <div class="flex items-center justify-center">
                        <!-- botón login -->
                        <button
                            class="mb-2 w-[50%] cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-300"
                            type="submit"
                        >
                            Iniciar sesión
                        </button>
                        <!-- FIN botón login -->
                    </div>

                    <div>
                        <div class="my-4 flex items-center justify-center">
                            <div class="h-px w-[20%] bg-black"></div>
                            <span class="mx-4 text-xl font-bold"
                                >¿No tienes cuenta?</span
                            >
                            <div class="h-px w-[20%] bg-black"></div>
                        </div>

                        <div class="flex items-center justify-center">
                            <!-- botón de redirección a registro -->
                            <button
                                class="mb-2 w-[50%] cursor-pointer rounded-sm border bg-violet-300 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-400"
                            >
                                <RouterLink to="/register">
                                    ¡Regístrate!
                                </RouterLink>
                            </button>
                            <!-- FIN botón de redirección a registro -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- FIN bloque del formualario a rellenar -->

            <!-- bloque de la imagén de inicio de sesión -->
            <div class="flex h-full w-full items-center justify-center">
                <img
                    src="/public/images/auth/roman_colosseum.png"
                    alt="auth-image"
                />
            </div>
            <!-- FIN bloque de la imagén de inicio de sesión -->
        </div>
    </section>
</template>
