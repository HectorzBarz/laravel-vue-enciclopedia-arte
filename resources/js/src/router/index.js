import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../components/HomeView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/search",
            name: "search",
            component: () => import("@/src/components/layouts/SearchView.vue"),
        },
        {
            path: "/contact",
            name: "contact",
            component: () =>
                import("@/src/components/feedback/ContactView.vue"),
        },
        {
            path: "/login",
            name: "login",
            component: () => import("@/src/components/auth/LoginView.vue"),
        },
        {
            path: "/register",
            name: "register",
            component: () => import("@/src/components/auth/RegisterView.vue"),
        },
    ],
});

export default router;
