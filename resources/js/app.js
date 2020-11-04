/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import VueRouter from 'vue-router';

window.Vue = require('vue');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
 
import SalesMonitor from './components/SalesMonitor.vue';
import POS from './components/POS.vue';
import User from './components/Users.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/salesmonitor', component: SalesMonitor, name: SalesMonitor, meta: { auth: true }},
    { path: '/pos', component: POS, name: POS, meta: { auth: true }},
    { path: '/user', component: User, name: User, meta: { auth: true }}
  ]

const router = new VueRouter({
    mode: 'history',
    routes
  })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
