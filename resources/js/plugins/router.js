import Vue from 'vue';
import VueRouter from 'vue-router';
import TestTable from '../components/TestTable.vue';


Vue.use(VueRouter);

export default new VueRouter({
    routes:[
        {path:"/", component: TestTable},
    ],
    mode: 'history'
});