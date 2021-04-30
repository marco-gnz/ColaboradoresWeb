require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('lista-trabajadores', require('./components/Trabajadores.vue').default);

const app = new Vue({
    el: '#app',
});