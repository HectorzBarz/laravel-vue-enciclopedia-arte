<script setup></script>

<template>
    <section class="h-full w-full px-5 py-32 xl:p-32">
        <div
            class="grid rounded-l-sm rounded-r-sm bg-violet-100 px-5 py-10 lg:grid-cols-2 xl:rounded-xl"
        >
            <!-- bloque del formualario a rellenar -->
            <div
                class="items-base py-5 lg:border-r-2 lg:border-violet-200 lg:px-10"
            >
                <form name="login-form" action="/login" method="post">
                    <!-- input de email -->
                    <div class="mb-10 flex flex-col">
                        <label for="email" class="text-2xl"
                            >Correo electrónico:
                        </label>
                        <input
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            type="email"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu correo electrónico..."
                            autocomplete="email"
                            required
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
                            name="password"
                            type="password"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu contraseña..."
                            autocomplete="password"
                        />
                    </div>
                    <!-- FIN input de password -->

                    <div class="flex items-center justify-center">
                        <!-- botón login -->
                        <button
                            class="mb-2 cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-300 lg:w-[50%]"
                            type="submit"
                        >
                            Iniciar sesión
                        </button>
                        <!-- FIN botón login -->
                    </div>

                    <div>
                        <div class="my-4 flex items-center justify-center">
                            <div class="h-px w-[20%] bg-black"></div>
                            <span class="mx-4 text-center text-xl font-bold"
                                >¿No tienes cuenta?</span
                            >
                            <div class="h-px w-[20%] bg-black"></div>
                        </div>

                        <div class="flex justify-center">
                            <!-- botón de redirección a registro -->
                            <button
                                class="mb-2 cursor-pointer rounded-sm border bg-violet-300 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-400 lg:w-[50%]"
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
            <div
                class="hidden h-full w-full items-center justify-center lg:flex"
            >
                <img
                    src="/public/images/auth/roman_colosseum.png"
                    alt="auth-image"
                />
            </div>
            <!-- FIN bloque de la imagén de inicio de sesión -->
        </div>
    </section>
</template>
