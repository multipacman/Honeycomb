import Vue from "vue";
import VueRouter from "vue-router";
import Board from "./Board.vue";
import Login from "./Login.vue";
import Register from "./Register.vue";
import Dashboard from "./Dashboard.vue";

Vue.use(VueRouter);

const routes = [
    { path: "/", name: "home", component: Dashboard },
    { path: "/board/:id", name: "board", component: Board },
    { path: "/login", name: "login", component: Login },
    { path: "/register", name: "register", component: Register },
];

export default new VueRouter({
    routes,
    mode: "history",
});
