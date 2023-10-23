import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from "vue-router";
import { routes } from "./routes";
import 'bootstrap/dist/css/bootstrap.min.css'
import App from './App.vue'

let app = createApp(App) //nafs router-outlet fi angular yetcharga fih page wahda eli bech nhelouha eli deja marbouta b route
const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
})
app.use(router); //nesta3mlo routes mte3na a partir mel routes.js bech net2akdo beli route eli talbino fi navigateur deja mawjoud w ywasal lel page 3ana menha
app.mount("#app") // nlanciw page eli nhebo nhelouha fi wost id="app" eli jeya mel app.blade.php  