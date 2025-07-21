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
                <form name="login-form">
                    <!-- input de username -->
                    <div class="mb-10 flex flex-col">
                        <label for="username" class="text-2xl"
                            >Nombre de usuario:
                        </label>
                        <input
                            id="username"
                            type="username"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu nombre de usuario..."
                            required
                            autocomplete
                        />
                    </div>
                    <!-- input de username -->
                    <div class="mb-10 flex flex-col">
                        <label for="email" class="text-2xl"
                            >Correo electrónico:
                        </label>
                        <input
                            id="email"
                            type="email"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu correo electrónico..."
                            required
                            autocomplete
                        />
                    </div>
                    <!-- FIN input de email -->

                    <!-- input de password -->
                    <div class="mb-16 flex flex-col">
                        <label for="password" class="text-2xl"
                            >Contraseña:
                        </label>
                        <input
                            id="password"
                            type="password"
                            class="h-12 rounded-sm border bg-white px-2 text-xl"
                            placeholder="Introduce tu contraseña..."
                            required
                        />
                    </div>
                    <!-- FIN input de password -->

                    <div class="flex items-center justify-center">
                        <!-- botón register -->
                        <button
                            class="mb-2 cursor-pointer rounded-sm border bg-violet-200 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-300 lg:w-[50%]"
                            type="submit"
                        >
                            Regístrarse
                        </button>
                        <!-- FIN botón register -->
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
                            <!-- botón de redirección a login -->
                            <button
                                class="mb-2 cursor-pointer rounded-sm border bg-violet-300 px-2.5 py-1 text-2xl transition-colors hover:bg-violet-400 lg:w-[50%]"
                            >
                                <RouterLink to="/login">
                                    ¡Inicia sesión!
                                </RouterLink>
                            </button>
                            <!-- FIN botón de redirección a login -->
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
                    src="/public/images/auth/pisa_tower.png"
                    alt="auth-image"
                />
            </div>
            <!-- FIN bloque de la imagén de inicio de sesión -->
        </div>
    </section>
</template>
