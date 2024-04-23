import './bootstrap';

import {createApp} from 'vue';
import app from './components/app.vue';
import router from './router/index.js';
import 'bootstrap/dist/css/bootstrap.css';
import "bootstrap/dist/js/bootstrap.js";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import { Bootstrap4Pagination } from 'laravel-vue-pagination';
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
import { TailwindPagination } from 'laravel-vue-pagination';
import 'bootstrap-icons/font/bootstrap-icons.css';


import 'boxicons/css/boxicons.min.css';

import 'quill/dist/quill.snow.css';
import 'quill/dist/quill.bubble.css';

import 'remixicon/fonts/remixicon.css';
createApp(app).use(router).mount("#app")
