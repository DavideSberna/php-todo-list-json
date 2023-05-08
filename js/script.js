const {createApp} = Vue;
createApp({
    data(){
        return{
             
            todoList: [],
            apiUrl: 'server.php',
            newTask: '',
            complete: false,
            delete: false,


        }
    },
    methods:{
        allList(){
            axios.get(this.apiUrl).then((res) =>{
                console.log(res.data);
                this.todoList = res.data;
                console.log('todoList',this.todoList)
            });
            
        },
        addTask(){
            const data = {
                newTask: this.newTask,
                complete: this.complete,
                delete: this.delete,
            };
            axios.post(this.apiUrl, data, {headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.newTask = '';
                this.todoList = res.data;
            })
        }

    },
    mounted(){
        this.allList();

    }
}).mount('#app');