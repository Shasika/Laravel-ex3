<template>
    
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Task List</div>

                <div class="card-body">
                   <h1> Task List</h1>
                    <ul>
                        <li v-for="task in tasks" :key="task.id">{{task.title}}</li>
                    </ul>
                    
                </div>
                <TaskForm  @createTitle="getTitle"/>
                <input type="submit" value="Add Task" class="btn btn-info" @click.prevent="addTask()">
        </div>
    </div>

</template>

<script>
import TaskForm  from './TaskForm';
    export default {
        data(){
            return {
                tasks: [],
                newTask:''
            }
        },
        components:{
            TaskForm
        },
        mounted(){
            this.getTasks();
            // axios.get('/tasks').then(res => {
            //         console.log(res.data);
            //     });
        },
        methods:{
            getTasks(){
                axios.get('/api/tasks').then(res => {
                    console.log(res.data);
                    this.tasks = res.data;
                });
            },
             addTask(){
                axios.post('/api/add-task',{title:this.newTask}).then(response => {
                    
                });
            },
            getTitle(task){
                console.log(task);
                this.newTask = task;
            }
        
        }
        
    }
</script>
<style>

</style>
