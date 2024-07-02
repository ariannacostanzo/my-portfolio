import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mixin({methods: {route}})
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});


// import { createApp, h } from "vue";
// import { createInertiaApp } from "@inertiajs/inertia-vue3";
// import { InertiaProgress } from "@inertiajs/progress";
// import { createRouter, createWebHistory } from "vue-router";
// import { ZiggyVue } from "../../vendor/tightenco/ziggy"; // Adjust the path as needed

// // Import your routes and main App component
// import routes from "./routes"; // Define your Vue Router routes
// import Welcome from "./pages/Welcome.vue"; // Your main App.vue component

// // Initialize Inertia
// const appName = import.meta.env.VITE_APP_NAME || "Laravel";

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => import(`./Pages/${name}.vue`),
//     setup({ el, App, props, plugin }) {
//         const app = createApp({ render: () => h(App, props) })
//             .use(plugin)
//             .use(ZiggyVue);

//         const router = createRouter({
//             history: createWebHistory(),
//             routes, // Pass your defined routes here
//         });

//         app.use(router);

//         return app.mount(el);
//     },
//     progress: {
//         color: "#4B5563",
//     },
// });

// // Initialize Inertia Progress
// InertiaProgress.init({ color: "#4B5563" });
