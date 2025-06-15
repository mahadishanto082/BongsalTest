import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import { createApp } from 'vue';
import App from './App.vue';
import './index.css';
import router from './router';
import store from './store';
import './style.css';

createApp(App).use(store).use(router).mount('#app');
