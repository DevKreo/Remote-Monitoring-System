require('./bootstrap');
require('@coreui/coreui/dist/js/coreui.bundle.min');

window.Vue = require('vue');

import Vuetify from './plugins/vuetify'

//import App from 'resources/js/App.vue';
Vue.component('test-table', require('./components/TestTable.vue').default);


const app=new Vue({
    vuetify: Vuetify,
    el:"#app",
});