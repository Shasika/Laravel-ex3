
<template>
    
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Task Form</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="text" name="title" v-model="title"  placeholder="Task title" class="form-control" @change="addTask()">
                                
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    
</template>

<script>    
    export default {
        data(){
            return {
                title : ''
            }
        },
        methods:{
           addTask(){
               this.$emit('createTitle',this.title);
               this.title = ''
           }
        }

    } 
</script>
<style  scoped>

</style>