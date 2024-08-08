import Welcome from "./Pages/Welcome.vue";
import ProjectDetailPage from "./Pages/ProjectDetailPage.vue";

const routes = [
    { path: "/", component: Welcome, name: "welcome" },
    {
        path: "/project/:id",
        component: ProjectDetailPage,
        name: "project-detail",
        props: true,
    },
];

export default routes;

