<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$pdo = include 'koneksi.php';
$sql = "SELECT * FROM users WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(array('id' => $_SESSION['user']['id']));
$user = $query->fetch();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind -->

  <link rel="stylesheet" href="./style/style.css">
  
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- league spartan -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jersey+15&family=League+Spartan:wght@100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-900">
    <div class="profile max-w-[80%] mx-auto py-14">
        <div class="profile-nav flex justify-between">
            <a href="utama.php"><i class="fa-solid fa-arrow-left text-white text-2xl"></i></a>
            <h2 class="text-white text-2xl font-bold">User Profile</h2>
            <h1></h1>
        </div>
        
        <div class=" mb-8 mt-10 rounded-xl border border-[rgba(42,67,117,0.8)]">
            <div class="bg-gradient-to-br from-[rgba(13,27,55,0.8)] to-[rgba(5,15,35,0.9)] backdrop-blur-sm p-6 rounded-xl relative overflow-hidden">
                <div class="flex flex-col md:flex-row items-center  gap-6">
                    <div class="relative">
                        <div class="rounded-full border border-[rgba(42,67,117,0.8)]">
                            <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=64&d=monsterid" 
                            class="rounded-full w-20 h-20 ">
                        </div>
                    </div>
                    
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-bold text-white mb-1"><?php echo htmlentities($_SESSION['user']['username'])?></h2>
                        <p class="text-blue-300/80 mb-3"><?php echo htmlentities($_SESSION['user']['email'])?></p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-blue-500/20 mb-6">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                <li class="mr-2">
                    <a href="profile.php" class="inline-block p-4 border-b-2 border-transparent text-white hover:text-blue-300 hover:border-blue-300/30 rounded-t-lg">Profile Information</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 border-b-2 border-blue-500 text-blue-400 rounded-t-lg active">History</a>
                </li>
            </ul>
        </div>

        <div class="border border-[rgba(42,67,117,0.8)] rounded-xl mb-8">
            <div class="bg-gradient-to-br from-[rgba(13,27,55,0.8)] to-[rgba(5,15,35,0.9)] backdrop-blur-sm p-6 rounded-xl">
            <h3 class="text-xl font-semibold mb-6 text-white">History Discussion</h3>
            <?php
            if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { 
                $pdo = require 'koneksi.php';
                $sql = "SELECT judul, tanggal, username, email, topik.id FROM topik
                INNER JOIN users ON topik.id_user = users.id
                WHERE topik.id_user = :id_user
                ORDER BY tanggal DESC";
    
        $query = $pdo->prepare($sql);
        $query->bindParam(':id_user', $_SESSION['user']['id'], PDO::PARAM_INT);
        $query->execute();
                ?>
                <?php 
                while($data = $query->fetch()) {?> 
                        <figure class="mt-2 border-l-4 border-[#0054AA] pl-4 bg-gray-800 p-4 shadow-md rounded-lg w-[100%]">
                            <div class="flex items-center gap-2">
                                <div class="">
                                     <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($data['email']))); ?>?s=48&d=monsterid" class="rounded-[50%]">
                                </div>
                                <blockquote class="text-gray-700 italic">
                                    <p>
                                        <a href="lihat-topik.php?id=<?php echo $data['id'];?>" class="text-blue-600 font-semibold hover:underline"><?php echo htmlentities($data['judul']); ?></a>
                                    </p>
                                </blockquote>
                            </div>
                            <figcaption class="text-gray-500 text-[10px] mt-2">
                                By: <span class="font-medium text-gray-300"> <?php echo htmlentities($data['username']); ?> </span> – <?php echo date('d M Y H:i', strtotime($data['tanggal'])); ?>
                            </figcaption>
                        </figure> 
            <?php }?>
            <?php }?>   
            </div>
        </div>

        <div class="">
            
        </div>

        
    </div>
</body>
</html>