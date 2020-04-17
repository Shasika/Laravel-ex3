import Vue from 'vue'; 
import VueRouter from 'vue-router';
import TaskForm from "./components/TaskForm";
require('./bootstrap');
Vue.use(VueRouter);
export default new VueRouter({
        routes :[
            {            
                name: 'tasks',
                path:'/tasks' ,
                component : TaskForm
            },

        ],

        mode:'history'
});