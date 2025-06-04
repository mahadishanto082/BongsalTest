import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';


import { createApp } from 'vue'
import store from '../../BongsalTest/src/store'
import './index.css';
import './style.css'
import router from '../../BongsalTest/src/router'
import App from './App.vue'

createApp(App)
.use(store)
.use(router)
.mount('#app')
