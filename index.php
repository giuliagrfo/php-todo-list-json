<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ToDo List</title>
</head>

<body>
    <div id="app">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center">Tasks</h1>
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="task in tasks">{{task}}</li>
                </ul>
                <form action="index.php" method="post">
                    <div class="mb-3 d-flex">
                        <input type="text" class="form-control" placeholder="Add a new task" aria-label="task" v-model="newToDo">
                        <button type="submit" class="btn btn-primary ms-2" @click="addTodo">Add Task</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>
</body>

</html>