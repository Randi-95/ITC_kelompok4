<?php
session_start();
require_once 'koneksi.php';
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
    <header class="bg-gray-800 shadow-lg">
        <nav class="w-[90%] p-4 mx-auto flex items-center justify-between text-white">
            <div class="nav-judul">
                <a href="forum.php"><h1 class="font-[700] text-[12px] md:text-[26px] judul text-white"><i class="fa-solid fa-arrow-left"></i> Forum<span class="text-[#0054AA] kata-2"> discussion </span></h1></a>
            </div>
            <div class="nav-icon flex items-center">
                <div class="flex gap-4">
                    <button class="notifikasi"><i class="fa-regular fa-bell text-[25px]"></i></button>
                    <button class="username-profile border border-gray-700 bg-gray-700 p-1 rounded-md flex items-center gap-2 text-[14px] h-fit w-fit">
                        <span class="font-[500] flex items-center">Username</span>
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
                            <li class="text-[14px] font-[400]"><a href=""><i class="fa-solid fa-user mr-2"></i>Profile</a></li>
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
                        <p class="font-semibold text-lg">Topik Tidak Ditemukan</p>
                        <p class="text-sm mt-1">Topik yang Anda cari tidak tersedia atau telah dihapus.</p>
                        <a href="utama.php" class="mt-3 inline-block px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 transition duration-300">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>';
            }else {
                ?>
                    <div class="flex gap-x-[10px] w-full mb-2">
                        <div>
                            <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($topik['email']))); ?>?s=48&d=monsterid" class="rounded-[50%]">
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-white font-[600]  md:text-[30px] leading-tight">
                                <?php echo htmlentities($topik['username'])?>
                            </h2>
                            <small class="text-[10px] text-[#dcdbdb] leading-tight">
                                <?php echo date('d M Y H:i', strtotime($topik['tanggal'])); ?>
                            </small>
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-white md:text-[30px] font-[600] md:leading-[30px]" ><?php echo htmlentities($topik['judul'])?></h2>
                        <p class="text-[#c4c2c2] mt-4 leading-[14px] md:leading-5 text-[12px] md:text-[15px]"><?php echo nl2br(htmlentities($topik['deskripsi']))?></p>
                    </div>
                    <hr class="mt-2 border border-[#0054AA]">
                    <div class="flex items-start gap-2.5 mt-4">
                    <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=48&d=monsterid" class="rounded-[50%] w-7 h-7">
                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Randi</span>
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">04 Mar 2025 00:17</span>
                            </div>
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                <p class="text-sm font-normal text-gray-900 dark:text-white"> That's awesome. I think our users will really appreciate the improvements.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-2 border border-[#0054AA]">
                    <form action="jawab-topik.php" method="POST" class="mt-4">
                        <div class="flex items-start gap-3">
                            <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=48&d=monsterid" class="rounded-[50%] w-12 h-12">
                            <div class="w-full">
                                <textarea name="komentar" class="w-full mt-1 p-2 text-white text-[12px] bg-transparent border border-[#0054AA] rounded-lg focus:ring-1 focus:ring-blue-400 focus:border-blue-400 outline-none transition-all duration-300 resize-none shadow-sm mb-4 h-[100px]" placeholder="write your comments..."></textarea>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-[#0054AA] text-white px-4 py-2 rounded-lg font-[400] ">Send</button>
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