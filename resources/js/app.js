import './bootstrap';
import {createApp} from 'vue';
import app from './components/app.vue';
import router from './router/index.js';
import 'bootstrap/dist/css/bootstrap.css';
import "bootstrap/dist/js/bootstrap.js";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
// Import Bootstrap Icons
import 'bootstrap-icons/font/bootstrap-icons.css';

// Import Boxicons
import 'boxicons/css/boxicons.min.css';

// Import Quill
import 'quill/dist/quill.snow.css';
import 'quill/dist/quill.bubble.css';

// Import Remixicon
import 'remixicon/fonts/remixicon.css';

createApp(app).use(router).mount("#app")
