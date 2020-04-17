<template>
    <div class="app">
        <router-view></router-view>
        <TaskList />
    </div>
</template>

<script> 
import TaskList from './TaskList';   
    export default {
        components:{
            TaskList
        }
    } 
</script>
<style  scoped>

</style>