<?php

require_once 'koneksi.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- tailwind -->
        
        <script src="https://cdn.tailwindcss.com"></script>
      
        <!-- css -->
         <link rel="stylesheet" href="./style/style3.css">
      
        <!-- league spartan -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      </head>
<body class="bg-gray-900 min-h-screen">
    <header class="bg-gray-800 shadow-lg z-50">
        <nav class="w-[90%] p-4 mx-auto flex items-center justify-between text-white">
            <div class="nav-judul">
                <a href="forum.php"><h1 class="font-[700] text-[12px] md:text-[26px] judul text-white"><i class="fa-solid fa-arrow-left"></i> Forum<span class="text-[#0054AA] kata-2"> discussion </span></h1></a>
            </div>
            <div class="nav-icon flex items-center">
                <div class="flex gap-4">
                    <button class="notifikasi"><i class="fa-regular fa-bell text-[25px]"></i></button>
                    <button class="username-profile border border-gray-700 bg-gray-700 p-1 rounded-md flex items-center gap-2 text-[14px] h-fit w-fit">
                        <span class="font-[500] flex items-center"><?php echo htmlentities($_SESSION['user']['username']) ?></span>
                        <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=48&d=monsterid" class="rounded-[50%] w-7 h-7">
                    </button>
                </div>
                <div class="relative">
                    <div class="isi-notifikasi hidden absolute left-[-300px] z-50 bg-gray-800 top-[20px] w-[300px] h-[400px] p-4 border border-gray-700 shadow-lg rounded-lg">
                        <h1 class="font-[600] text-[16px] mb-[10px]">Notifikasi</h1>
                        <div class="container-notifikasi flex flex-col gap-4">
                            <div class="isi-notifikasi">
                                <div class="isi-notifikasi-item flex gap-2">
                                    <p class="text-[12px] rounded-sm w-[115px] flex items-center justify-center gap-1 h-[36px] border-[2px] border-[#0054AA] text-[#0054AA]"><i class="fa-solid fa-comment"></i> Komentar baru</p>
                                    <p class="flex items-center gap-2"><i class="fa-solid fa-circle text-[4px]"></i><span class="text-[12px]">2 hari yang lalu</span></p>
                                </div>
                                <div class="">
                                    <p class="text-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="isi-notifikasi">
                                <div class="isi-notifikasi-item flex gap-2">
                                    <p class="text-[12px] rounded-sm w-[115px] flex items-center justify-center gap-1 h-[36px] border-[2px] border-[#0054AA] text-[#0054AA]"><i class="fa-solid fa-comment"></i> Komentar baru</p>
                                    <p class="flex items-center gap-2"><i class="fa-solid fa-circle text-[4px]"></i><span class="text-[12px]">2 hari yang lalu</span></p>
                                </div>
                                <div class="">
                                    <p class="text-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="isi-notifikasi">
                                <div class="isi-notifikasi-item flex gap-2">
                                    <p class="text-[12px] rounded-sm w-[115px] flex items-center justify-center gap-1 h-[36px] border-[2px] border-[#0054AA] text-[#0054AA]"><i class="fa-solid fa-comment"></i> Komentar baru</p>
                                    <p class="flex items-center gap-2"><i class="fa-solid fa-circle text-[4px]"></i><span class="text-[12px]">2 hari yang lalu</span></p>
                                </div>
                                <div class="">
                                    <p class="text-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="isi-profile hidden absolute z-50 border border-gray-700 bg-gray-800 shadow-lg w-[120px] h-[160px] p-4 rounded-lg left-[-100px] top-[20px]">
                        <ul class="flex flex-col gap-4">
                            <li class="text-[14px] font-[400]"><a href="profile.php?changed=0"><i class="fa-solid fa-user mr-2"></i>Profile</a></li>
                            <li class="text-[14px] font-[400]"><a href=""><i class="fa-solid fa-gear mr-2"></i>Settings</a></li>
                            <li class="text-[14px] font-[400]"><a href="logout.php"><i class="fa-solid fa-right-from-bracket text-red-500 mr-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-2 md:p-10 p-2"> 
        <div class="fixed md:hidden bottom-0 md:bottom-auto left-0 right-0 md:relative  left flex justify-center md:justify-start md:flex-col gap-4 md:h-[85vh] bg-gray-800 md:rounded-[16px] shadow-lg border border-gray-700">
            <div class="navbar-left md:pt-10">
                <div class="navbar-nav flex justify-center">
                    <ul class="flex md:flex-col gap-2 w-[100%]">
                    <a href="#"><div class="flex hover:bg-[#34a6c2] duration-[0.2s] mx-auto px-4 py-2 rounded-lg w-[80%]">
                             <li class="text-white font-[600] text-[20px] "><i class="fa-solid fa-house-user mr-2"></i><span class="hidden md:inline">Post</span></li>
                        </div>
                    </a>
                    <a href="forum.php"><div class="flex hover:bg-[#00A9D3] duration-[0.2s] mx-auto px-4 py-2 rounded-lg w-[80%]">
                        <li class="text-white font-[600] text-[20px] "><i class="fa-solid fa-comments mr-2"></i><span class="hidden md:inline">Forum</span></li>
                       </div>
                    </a>
                    <p class="text-white font-[600] text-[16px] md:flex justify-center items-center hidden">Top Topics<i class="fa-solid fa-caret-down pl-[20px] dropdown-button"></i></p>
                    <div class="topik-forum">
                        <ul class="flex flex-wrap gap-2 w-[85%] mx-auto px-[20px]">
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#Ransomware</a></li>
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#Phishing</a></li>
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#Trojan</a></li>
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#CodeInjection</a></li>
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#malware</a></li>
                            <li><a href="" class="text-white text-[10px] font-[600] bg-[#00A8E8] p-[4px] rounded-md hover:bg-[#0054AA] duration-[0.2s] ease-in">#encryption</a></li>
                    </ul>
                    </div>
                    <a href="index.html"><div class="flex hover:bg-[#00A9D3] duration-[0.2s] mx-auto px-4 py-2 rounded-lg w-[80%]">
                        <li class="text-white font-[600] text-[20px]"><i class="fa-solid fa-gear mr-2"></i><span class="hidden md:inline">Settings</span></li>
                        </div>
                    </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT topik.*, users.username, users.email FROM topik
                    INNER JOIN users ON topik.id_user=users.id
                    WHERE topik.id=:id";
            $query = $pdo->prepare($sql);
            $query->execute(array('id' => $_GET['id']));
            $topik = $query->fetch();

            if (empty($topik)) {
                echo '
                <div class="flex">
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 max-w-lg rounded-lg shadow-lg">
                        <p class="font-semibold text-lg">Postingan Tidak Ditemukan</p>
                        <p class="text-sm mt-1">Postingn yang Anda cari tidak tersedia atau telah dihapus.</p>
                        <a href="utama.php" class="mt-3 inline-block px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 transition duration-300">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>';
            }else {
                ?>
                    <!-- Topic Header -->
                <div class="bg-gray-800  p-6 rounded-2xl mb-6 shadow-lg">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="flex-shrink-0">
                            <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($topik['email']))); ?>?s=64&d=monsterid" 
                                 class="rounded-full w-14 h-14 border-2 border-[#00A8E8]/30 shadow-lg shadow-[#00A8E8]/10">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center">
                                <h2 class="text-xl font-bold text-white">
                                    <?php echo htmlentities($topik['username'])?>
                                </h2>
                                <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#00A8E8]/20 text-[#00A8E8]">
                                    Author
                                </span>
                            </div>
                            <div class="flex items-center text-xs text-gray-400 mt-1">
                                <i class="fa-regular fa-clock mr-1.5"></i>
                                <?php echo date('d M Y H:i', strtotime($topik['tanggal'])); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Topic Content -->
                    <div class="flex justify-center">
                        <img src="assets/hero-bg.jpg" alt="" class="w-[40rem]">
                    </div>

                    <div class="text-gray-300 mb-4 leading-relaxed mt-2">
                        <p class="whitespace-pre-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil earum qui explicabo iure dicta possimus, odio mollitia doloribus! Sunt recusandae nihil, autem magni velit corrupti illum veritatis quia perspiciatis eaque.</p>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mt-6">
                        <span class="text-xs font-medium bg-gray-700/50 px-3 py-1.5 rounded-full text-gray-300">
                            <i class="fa-solid fa-message mr-1"></i> 
                            <?php 
                                $commentSql = "SELECT COUNT(*) FROM komentar WHERE id_topik = :id";
                                $commentQuery = $pdo->prepare($commentSql);
                                $commentQuery->execute(['id' => $_GET['id']]);
                                echo $commentQuery->fetchColumn(); 
                            ?> replies
                        </span>
                    </div>
                </div>

                    <hr class="mt-2 border border-[#0054AA]">
                    <?php
                    $sql2 = "SELECT komentar.*, users.username, users.email FROM komentar
                    INNER JOIN users ON users.id=komentar.id_user
                    WHERE id_topik=:id_topik";
                    $query2 = $pdo->prepare($sql2);
                    $query2->execute(array(
                        'id_topik' => $_GET['id']
                    ));
                    while($komentar = $query2->fetch()) {?>
                    
                    <div class="flex items-start gap-2.5 mt-8">
                    <img src="https://www.gravatar.com/avatar/<?php echo md5(($komentar['email'])); ?>?s=48&d=monsterid" class="rounded-[50%] w-10 h-10">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span class="text-sm font-semibold text-white"><?php echo htmlentities($komentar['username']); ?></span>
                                <span class="text-sm font-normal text-gray-500"><?php echo date('d M Y H:i', strtotime($komentar['tanggal'])); ?></span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-700 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal text-white break-words whitespace-pre-wrap"><?php echo nl2br(htmlentities($komentar['komentar'])); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <hr class="mt-4 border-0 h-[1px] bg-gradient-to-r from-transparent via-blue-500 to-transparent opacity-60">
                    <form method="POST" action="jawab-topik.php" class="mt-6">
                        <div class="flex items-start gap-4">
                            <div class="overflow-hidden rounded-full  p-[2px] bg-gradient-to-br from-blue-300 to-blue-600">
                                <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=48&d=monsterid" class="rounded-full w-12 h-12">
                            </div>
                            <div class="w-full">
                                <div class="relative w-full mb-4">
                                    <textarea name="komentar" 
                                        class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300 resize-none shadow-lg h-[120px]" 
                                        placeholder="Share your thoughts..." required></textarea>
                                </div>
                                <input type="hidden" value="<?php echo $topik['id'];?>" name="id_topik">
                            </div>
                        </div>
                        <div class="flex justify-end mb-[100px]">
                            <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white px-6 py-2.5 rounded-xl font-medium shadow-lg shadow-blue-500/30 transition-all duration-300 flex items-center gap-2">
                                <span>Send</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                            </button>
                        </div>
                    </form>
                <?php
            }
        }
        ?>

        </div>
    </main>

    <script src="./js/utama.js"></script>
</body>
</html>