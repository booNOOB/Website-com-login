<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: login.php");
    exit;
} else {
    $id = $_SESSION['id_usuario'];
    $link = mysqli_connect("localhost", "root", "", "loginkrl");
    $sql = mysqli_query($link, "select * from usuarios WHERE id_usuario = '$id' ");
    while ($dados = mysqli_fetch_array($sql)) {
        $user = $dados['usuario'];
        $perfil = $dados['perfil'];
    }
}
