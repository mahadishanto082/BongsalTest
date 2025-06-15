import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import Login from '../views/Auth/Login.vue'
import HelloWorld from '../components/HelloWorld.vue'
 import RequestPassword from '../components/RequestPassword.vue'
import ResetPassword from '../components/ResetPassword.vue'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Registration from '../views/Auth/Registration.vue';
const routes = [
   
        {
            path: '/dashboard',
            name: 'dashboard',
            component: () => import('../views/Dashboard.vue'),
        },
        {
            path: '/login',
            name: 'login',
            component: () => import('../views/Auth/Login.vue'),
        },
        {
            path: '/registration',
            name: 'registration',
            component: () => import('../views/Auth/registration.vue'),
        },
        {
            path:'/RequestPassword',
            name: 'RequestPassword',
            component: () => import('../components/RequestPassword.vue'),
        },
        {
            path:'/ResetPassword',
            name: 'ResetPassword',
            component: () => import('../components/ResetPassword.vue'),
        }
    ];

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router