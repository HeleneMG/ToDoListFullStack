<?php include 'db.php';?>

<!DOCTYPE>
<html>

<head>
    <meta charset=UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="projetFullStack.css">
    <title>To do list</title>
</head>

<body>
    <h1>TO DO LIST</h1>

    <form action="projetFullStack.php" method="POST">
        <label for="ajouter"></label>
        <input type="text" name="tache" class="ajoutTache" placeholder="What do I have to do ?"></br>
        <button type="submit" name="submit" id="add_btn" class="add_btn">Ajouter</button>
    </form>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>TO DO</th>
                <th>DONE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="todo">Voici une tâche </td>
                <td class="done">Voici une tâche effectuée</td>
                <td class="delete">
                    <a href="#">X</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td class="todo">Voici une autre tâche </td>
                <td class="done">Voici une autre tâche effectuée</td>
                <td class="delete">
                    <a href="#">X</a>
                </td>
            </tr>
        
        </tbody>
    </table>

    <script src=""></script>
</body>

</html>