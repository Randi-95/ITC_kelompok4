<?php
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
    <header class="bg-gray-800 shadow-lg">
        <nav class="w-[90%] p-4 mx-auto flex items-center justify-between text-white">
            <div class="nav-judul">
                <h1 class="font-[700] text-[26px] judul text-white">Cyber<span class="text-[#0054AA] kata-2">Sec </span></h1>
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

    <main class="mt-2 md:grid md:grid-cols-[0.6fr_2fr] md:p-6 md:mx-auto md:gap-5"> 
        <div class="fixed bottom-0 md:bottom-auto left-0 right-0 md:relative  left flex justify-center md:justify-start md:flex-col gap-4 md:h-[85vh] bg-gray-800 md:rounded-[16px] shadow-lg border border-gray-700">
            <div class="navbar-left md:pt-10">
                <div class="navbar-nav flex justify-center">
                    <ul class="flex md:flex-col gap-2 w-[100%]">
                    <a href="#"><div class="flex bg-[#00A9D3]  hover:bg-[#34a6c2] duration-[0.2s] mx-auto px-4 py-2 rounded-lg w-[80%]">
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

        <!-- container utama -->
        <div class="center p-2">
            <div class=" bg-gray-800 rounded-[16px] shadow-lg p-2 border border-gray-700">
                <div class="flex gap-[6px] search">
                    <p class="flex items-center"><i class="fa-solid fa-circle-user text-gray-400 text-[25px]"></i></p>
                    <div class="relative search w-[100%]">
                        <input type="text" placeholder="Search something..." class="w-full p-3 pl-10 rounded-lg bg-gray-800 text-gray-200 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-4 text-gray-400 text-[14px]"></i>
                    </div>
                </div>
                <div class="ml-[30px] mt-[10px]">
                    <a href="buat_post.php"><button class="bg-[#0284c7] text-[10px]  px-[10px] py-[12px] rounded-[6px] text-[#fff] font-[700] hover:bg-[#4dbcf4]  duration-[0.4s] ease-in-out z-50">Create Discussion</button></a>
                </div>
            </div>
             <?php
            if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { 
                $pdo = require 'koneksi.php';
                $sql = "SELECT judul, image, deskripsi, tanggal, username, email, postingan.id FROM postingan
                INNER JOIN users ON postingan.id_user = users.id
                ORDER BY tanggal DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                ?>
                <?php
                while($data = $query->fetch()) {
                    $base64 = base64_encode($data['image']); ?>
            <figure class="mt-2 border-l-4 border-[#0054AA] pl-4 bg-gray-800 p-4 shadow-md rounded-lg w-[100%]">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($data['email']))); ?>?s=48&d=monsterid" class="rounded-[50%] w-10">
                        <p class="text-white font-bold text-xl"><?php echo htmlentities($data['username']); ?> </p>
                    </div>
                </div>
                <div class="mt-2 flex justify-center">
                    <?php echo "<img src= 'data:image/jpeg;base64, $base64'  alt='' class='lg:w-[20rem] w-full'>" ?>
                </div>
                <div class="mt-6">
                    <a href=""><i class="fa-solid fa-message  text-white"></i></a>
                    <p class = "truncate w-64 text-white text-sm"><?php echo htmlentities($data['deskripsi']); ?></p>
                    <span class="text-xs text-gray-400"><?php echo date('d M Y H:i', strtotime($data['tanggal'])); ?></span>
                </div>
                                   
            </figure>
            <?php } ?>
            <?php } ?>
            
        </div>
    </main>

    <script src="./js/utama.js"></script>
</body>
</html>