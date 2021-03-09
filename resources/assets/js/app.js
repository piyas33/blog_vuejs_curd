import Vue from 'vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios';
import axios from 'axios';

require('./bootstrap');
window.Vue = require('vue');

Vue.use(VueRouter)
Vue.use(VueAxios, axios);

import App from './components/App'
import AllPosts from './components/AllPosts.vue';
import AddPost from './components/AddPost.vue';
import EditPost from './components/EditPost.vue';
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            name: 'home',
            path: '/',
            component: AllPosts
        },
        {
            name: 'add',
            path: '/add',
            component: AddPost
        },
        {
            name: 'edit',
            path: '/edit/:id',
            component: EditPost
        }
    ],
});
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});