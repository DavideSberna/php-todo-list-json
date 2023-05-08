<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
         <header></header>
         <main>
            <section>
                <div>
                    <div>
                        <h3>Inserisci ciò che ti serve</h3>
                    </div>
                    <div>
                        <input type="text" name="task" id="task" v-model="newTask" @keyup.enter="addTask">
                        <button type="button" @click="addTask">Add</button>
                        <ul>
                            <li v-for="(item, index) in todoList" :key="index" class="d-flex" :class="{'bg-primary' : item.complete, 'd-none' : item.delete}">
                                <p>{{item.task}}</p>
                                <div class="ps-4">
                                    <span @click="item.complete = !item.complete" class="pe-2">complete</span>
                                    <span @click="item.delete = !item.delete">delete</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
         </main>
         <footer></footer>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>