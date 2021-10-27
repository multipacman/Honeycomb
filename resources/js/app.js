import "./bootstrap";
import Vue from "vue";
import Board from "./Board";
import Card from "./components/Card";
import CardAddButton from "./components/CardAddButton";
import List from "./components/List";
import apolloProvider from "./apollo.config";

window.Vue = Vue;

Vue.component("Board", Board);
Vue.component("Card", Card);
Vue.component("CardAddButton", CardAddButton);
Vue.component("List", List);

const app = new Vue({
    el: "#app",
    apolloProvider
});
