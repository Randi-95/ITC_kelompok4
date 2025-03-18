<?php
session_start();

if (empty($_POST)) {
    header("Location: utama.php");
}


if (!isset($_POST['id_topik']) || empty($__POST['id_topik'])) {
    header("Location: utama.php");
    
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar_post (komentar, tanggal, id_post, id_user)
VALUES (:komentar, now(), :id_post, :id_user) ";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar' => $_POST['komentar'],
    'id_post' => $_POST['id_post'],
    'id_user' => $_SESSION['user']['id']
));

header("Location: lihat-post.php?id=". $_POST['id_post']);
exit;