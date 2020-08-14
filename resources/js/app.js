import Vue from 'vue';
import VueRouter from "vue-router";
import routes from "./routes";
import NavBar from "./components/navigation/NavBar";
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter)
Vue.component('nav-bar', NavBar)

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    components: {NavBar}
})
