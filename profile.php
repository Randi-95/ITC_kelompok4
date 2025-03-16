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
                            <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($user['email']))); ?>?s=64&d=monsterid" 
                            class="rounded-full w-20 h-20 ">
                        </div>
                    </div>
                    
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-bold text-white mb-1"><?php echo htmlentities($user['username'])?></h2>
                        <p class="text-blue-300/80 mb-3"><?php echo htmlentities($user['email'])?></p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-blue-500/20 mb-6">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 border-b-2 border-blue-500 text-blue-400 rounded-t-lg active">Profile Information</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 border-b-2 border-transparent text-white hover:text-blue-300 hover:border-blue-300/30 rounded-t-lg">Settings</a>
                </li>
            </ul>
        </div>

        <div class="border border-[rgba(42,67,117,0.8)] rounded-xl mb-8">
            <div class="bg-gradient-to-br from-[rgba(13,27,55,0.8)] to-[rgba(5,15,35,0.9)] backdrop-blur-sm p-6 rounded-xl">
                <h3 class="text-xl font-semibold mb-6 text-white">Edit Profile</h3>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-blue-300">Username</label>
                            <input type="text" id="username" name="username" value="<?php echo ($user['username'])?>" class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-blue-300">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo ($user['email'])?>" class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300" required>
                        </div>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-4 text-white">Change Password</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="new_password" class="block mb-2 text-sm font-medium text-blue-300">Old Password</label>
                                <input type="password" id="password_lama" name="password_lama" class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300">
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-blue-300">New Password</label>
                                <input type="password" id="password_baru" name="password_baru" class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300">
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-blue-300">Confirm Password</label>
                                <input type="password" id="password_baru2" name="password_baru2" class="w-full p-3 text-white text-sm bg-[rgba(0,20,60,0.3)] backdrop-blur-sm border border-blue-500/30 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all duration-300">
                            </div>'
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white px-6 py-2.5 rounded-xl font-medium shadow-lg shadow-blue-500/30 transition-all duration-300 flex items-center gap-2">
                            <span>Save Changes</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="">
            
        </div>

        
    </div>
</body>
</html>