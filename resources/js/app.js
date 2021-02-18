require('./bootstrap');
require('@coreui/coreui/dist/js/coreui.bundle.min');

window.Vue = require('vue');

import router from './plugins/router'
import VueKonva from 'vue-konva'

//import App from 'resources/js/App.vue';
//Vue.component('test-table', require('./components/TestTable.vue').default);
//Vue.component('nav-side-bar', require('./components/NavSideBar.vue').default);
Vue.component('new-sidebar', require('./components/TestTable.vue').default);


Vue.use(VueKonva)
const app=new Vue({
    el:"#app",
    router,
});