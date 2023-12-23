/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

// import HasError from 'vform'
// import AlertError from 'vform'
import Form from 'vform'
let Fire = new Vue();
window.Fire = Fire;
// Vue.component(HasError.name, HasError)
// Vue.component(AlertError.name, AlertError)

window.Form = Form
import Vue from 'vue';
import VueRouter from "vue-router";



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "verifikasi-produk",
    require("./components/admin/verifikasi_produk.vue").default
);
Vue.component(
    "verifikasi-umkm",
    require("./components/admin/verifikasi_umkm.vue").default
);
Vue.component(
    "verifikasi-pembelian",
    require("./components/admin/verifikasi_pembelian.vue").default
);
Vue.component(
    "daftar-produk",
    require("./components/umkm/daftar_produk.vue").default
);
Vue.component(
    "managemen-user",
    require("./components/admin/managemen_user.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
