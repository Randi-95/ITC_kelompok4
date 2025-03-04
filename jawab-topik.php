<?php
session_start();

if (empty($_POST)) {
    header("Location: forum.php");
}


if (!isset($_POST['id_topik']) || empty($__POST['id_topik'])) {
    header("Location: forum.php");
    
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar (komentar, tanggal, id_topik, id_user)
VALUES (:komentar, now(), :id_topik, :id_user) ";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar' => $_POST['komentar'],
    'id_topik' => $_POST['id_topik'],
    'id_user' => $_SESSION['user']['id']
));

header("Location: lihat-topik.php?id=". $_POST['id_topik']);
exit;