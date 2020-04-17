
import vue from 'vue'; 
import router from './route.js'
require('./bootstrap');

window.Vue = require('vue');
import App from './components/App.vue'


const app = new Vue({
    el: '#app',
    router,
    components:{App}
});
