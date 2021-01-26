require('./bootstrap');
require('@coreui/coreui/dist/js/coreui.bundle.min');

window.Vue = require('vue');

import Vuetify from './plugins/vuetify'
import router from './plugins/router'

//import App from 'resources/js/App.vue';
Vue.component('test-table', require('./components/TestTable.vue').default);
Vue.component('nav-side-bar', require('./components/NavSideBar.vue').default);


const app=new Vue({
    vuetify: Vuetify,
    el:"#app",
    router,
});