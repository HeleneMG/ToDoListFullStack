<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=todolist', 'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch (Exception $e){
    echo 'Impossible de se connecter à la base de données';
    echo $e->getMessage();
    die();
}

if (isset($_POST['submit'])) {
    $tache = $_POST['tache'];
    mysqli_query($db,"INSERT INTO taches (tache) VALUES ('$tache')");
    header('location: projetFullStack.php');
}

