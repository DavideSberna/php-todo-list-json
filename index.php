<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
         <header></header>
         <main>
            <section class="container">
                <div>
                    <div class="text-center mt-5">
                        <h3>Inserisci ciò che ti serve</h3>
                    </div>
                    <div class="max-w">
                        <div class="input-group mt-4">
                            <input class="form-control" type="text" name="task" id="task" v-model="listTask.newTask" @keyup.enter="addTask">
                            <button class="btn btn-primary" type="button" @click="addTask">Add</button>
                        </div>
                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between pt-3 pb-3" v-for="(item, index) in todoList" :key="index" class="d-flex" :class="{'bg-primary': item.complete}">
                                <div>
                                    <p class="m-0">{{item.task}}</p>
                                </div>
                                <div class="ps-4">
                                    <span @click="completeTask(index)" class="pe-2" name="complete"><i class="fa-solid fa-check"></i></span>
                                    <span @click="deleteTask(index)"><i class="fa-solid fa-xmark"></i></span>
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