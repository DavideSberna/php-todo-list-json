const {createApp} = Vue;
createApp({
    data(){
        return{  
            todoList: [],
            apiUrl: 'server.php',
            listTask: {
                newTask: '',
                complete: false,
                 
            }
        }
    },
    methods:{
        allList(){
            axios.get(this.apiUrl).then((res) =>{
                this.todoList = res.data;
                console.log('todoList',this.todoList)
            });
            
        },
        addTask(){
            const data = {
                newTask: this.listTask.newTask,
            };
            axios.post(this.apiUrl, data, {headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.listTask.newTask = '';
                this.todoList = res.data;
            })
        },
        deleteTask(index){
             const data = {
                deleteItem: index  
            };
            axios.post(this.apiUrl, data, {headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.todoList = res.data;
            }) 
        },
        completeTask(index){
            const data = {
                updateItem: index  
            };
            axios.post(this.apiUrl, data, {headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.todoList = res.data;
            }) 
        },
         

    },
    mounted(){
        this.allList();

    }
}).mount('#app');