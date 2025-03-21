<?php
session_start();
$hasil = true;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "select * from users where email = :email";
    $query = $pdo->prepare($sql);
    $query->execute(array('email' => $_POST['email']));
    $user = $query->fetch();
    if (!$user) {
        $hasil = false;
    } elseif(sha1($_POST['password']) != $user['password']) {
        $hasil = false;
    } else {
        $hasil = true;
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email']
        ];
        header("Location: utama.php");
    }
}
?>
<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- tailwind -->
  
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- css -->
   <link rel="stylesheet" href="./style/style2.css">

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
<body class="">

    <main class="bg-[#0054AA] lg:p-4" >
        <div class="container-register bg-center bg-cover drop-shadow-2xl h-screen lg:h-[95vh] lg:rounded-[30px] flex flex-col md:flex-row"
        style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('assets/login.png');">
            <div class="judul-section hidden h-[50%] md:w-[50%] md:h-[100%] lg:flex flex-col items-center justify-center">
                <h1 class="font-[700] text-white text-[20px] lg:text-[40px]">WELCOME TO Cyber<span class="text-[#0054AA]">Sec</span></h1>
                <p class="leading-1 text-white text-[10px] text-center w-[70%]">Join Cyber<span class="text-[#0054AA]">Sec</span>! Learn, connect, and grow with experts. Access resources, share knowledge, and secure the digital world. Sign up now!</p>
            </div>
            <div class="form-section bg-[#008FB3] flex flex-col justify-center h-[100%] w-[100%] lg:w-[50%] md:h-[100%] lg:rounded-[30px]">
                <div class="w-[100%] p-3 lg:px-[30px]">
                    <h1 class="flex  text-[26px] text-[#eae9e9] font-[800]">Cyber <span class="text-[#0054AA]">Sec</span></h1>
                    <p class="text-[12px] font-[600] mb-4">Create an account to use the 4CyberSec platform</p>
                    <?php
                    if (!$hasil) {
                        echo '<P class="text-red-600">Invalid Email or Password</p>';
                    }
                    ?>
                    <form class="" method="POST" action="" accept="">
                        <div class="flex flex-col">
                            <label class="font-[700] text-[#eae9e9]" for="">Email :</label>
                            <div class="relative">
                                <input class="bg-[#dedbdb81] w-[100%] rounded-md h-[40px] hover:bg-[#c9c8c8] duration-[0.2s] px-8 mb-4" type="email" name="email" placeholder="username123@gmail.com" required>
                                <i class="fa-solid fa-envelope absolute top-3 left-2 text-[#4a4949]"></i>
                            </div>
                            <label class="font-[700] text-[#eae9e9]" for="">Password :</label>
                            <div class="relative">
                                <input class="bg-[#dedbdb81] w-[100%] rounded-md h-[40px] hover:bg-[#c9c8c8] duration-[0.2s] px-8 mb-4" type="password" name="password" placeholder="***********" required>
                                <i class="fa-solid fa-key absolute top-3 left-2 text-[#4a4949]"></i>
                            </div>
                        </div>
                        <button class="font-[700] text-white mt-2 bg-[#04CDFF] p-2 rounded-lg w-[100%] hover:bg-[#2d92ac] duration-[0.2s]" type="submit">Confirm</button>
                    </form>
                    <div class="mt-4 flex gap-4 justify-center">
                    <p class="text-[10px] flex items-center font-[600] text-[#eae9e9]">You don't have an account yet? </p>
                    <a href="register.php"><p class="text-[10px] text-[#0054AA] flex items-center gap-1 font-[800] hover:text-[#04CDFF] duration-[0.3s]"><i class="fa-solid fa-right-to-bracket text-[14px]"></i> Registration</p></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    
</body>

<script src="js/script.js"></script>
</html>