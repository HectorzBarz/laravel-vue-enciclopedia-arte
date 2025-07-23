import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../components/HomeView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeView,
            meta: { title: "Home" },
        },
        {
            path: "/search",
            name: "search",
            component: () => import("@/src/components/layouts/SearchView.vue"),
            meta: { title: "Search" },
        },
        {
            path: "/contact",
            name: "contact",
            component: () =>
                import("@/src/components/feedback/ContactView.vue"),
            meta: { title: "Contact" },
        },
        {
            path: "/login",
            name: "login",
            component: () => import("@/src/components/auth/LoginView.vue"),
            meta: { title: "Login" },
        },
        {
            path: "/register",
            name: "register",
            component: () => import("@/src/components/auth/RegisterView.vue"),
            meta: { title: "Register" },
        },
        {
            path: "/art-piece/:id",
            name: "art-piece",
            component: () => import("@/src/components/pieces/ArtPieceView.vue"),
            meta: { title: "Piece" },
        },
        {
            path: "/artists/:id",
            name: "artist",
            component: () => import("@/src/components/artists/ArtistView.vue"),
            meta: { title: "Artist" },
        },
        {
            path: "/movements/:id",
            name: "movement",
            component: () =>
                import("@/src/components/movements/MovementView.vue"),
            meta: { title: "Movement" },
        },
        {
            path: "/articles/:id",
            name: "article",
            component: () =>
                import("@/src/components/articles/ArticleView.vue"),
            meta: { title: "Article" },
        },
    ],
});

router.beforeEach((to, from, next) => {
    const appName = window.APP_NAME || "Artpedia"; // Puedes inyectar esto desde Laravel
    if (to.meta.title) {
        document.title = `${to.meta.title} | ${appName}`;
    } else {
        document.title = appName;
    }
    next();
});

export default router;
