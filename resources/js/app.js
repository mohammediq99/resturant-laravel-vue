/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('vue-multiselect/dist/vue-multiselect.min.css');
import Vue from 'vue';
window.Vue = require('vue');
import VModal from 'vue-js-modal';
Vue.use(VModal);
import Turbolinks from "turbolinks";
Turbolinks.start();
import TurbolinksAdapter from 'vue-turbolinks';

Vue.component('menu-container', require('./models/menu/MenuContainer.vue').default);
Vue.component('resto-group', require('./models/menu/resto/RestoGroup.vue').default);
Vue.component('order-group', require('./order/OrderGroup.vue').default);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
// these are reusable components
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card-component', require('./components/Card.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
document.addEventListener('turbolinks:load', () => {
    var element = document.getElementById("app")
    if (element != null) {
        const app = new Vue({
            el: '#app',
        });
    }
  });
