import Vue from 'vue';
import VueRouter from 'vue-router';
import TestTable from '../components/TestTable.vue';
import NewSidebar from '../components/NewSidebar'


Vue.use(VueRouter);

export default new VueRouter({
    routes:[
        {path:"/", component: NewSidebar},
    ],
    mode: 'history'
});