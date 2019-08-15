<?php
function db(){
    global $link;
    $link = mysqli_connect("localhost", "root", "", "todolist") ;
    return $link;
}

?>

<!DOCTYPE>
<html>

<head>
    <meta charset=UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="projetFullStack.css">
    <title>To do list</title>
</head>

<body>
    <h1>MA TO DO LIST</h1>
    <form action="ajout" method="post">

        <label for="ajouter"></label>
        <input type="text" placeholder="To do ?"></br>
        <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
    </form>
    <div class='content'>
        <h3 id="todo" class="titre">TO DO</h3>
            <ul class= "liste" id="elementsToDo">
                <li></li>
            </ul>
        <h3 id="done" class="titre">DONE</h3>
            <ul class="liste" id="elementsDone">
                <li></li>
            </ul>
    </div>
    <script src=""></script>
</body>
</html>
