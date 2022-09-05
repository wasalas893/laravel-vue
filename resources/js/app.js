

require('./bootstrap');
window.Vue = require('vue').default;
require('../css/app.css');





// router
import router from './routers.js';
import VueAxios from 'vue-axios';
import axios from 'axios';
import loader from "vue-ui-preloader";

Vue.use(VueAxios, axios);
Vue.use(loader);

window.router = router;
window.Fire = new Vue();




const app = new Vue({
    el: '#app',
    router,
}).$mount('#app');
