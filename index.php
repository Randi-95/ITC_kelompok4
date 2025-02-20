<?php
session_start();
?>


<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
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

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="h-[999px]">
    <header class="flex justify-between px-[20px] lg:px-[10%] py-[20px]  bg-transparent fixed w-[100%]   navbar duration-[0.5s]">
      <div class="navbar-judul">
        <h1 class="font-[700] text-[20px] judul text-white">Cyber<span class="text-[#0055AA] kata-2">Sec </span></h1>
      </div>
      <div class="menu z-50 navbar-nav flex gap-3 flex-col md:flex-row absolute top-0  py-[40px] md:py-0 px-[60px] md:px-0 right-[100%] bg-[#0055AA] h-screen shadow-lg lg:bg-transparent w-screen md:w-[20%] md:h-0 md:static menu duration-[0.5s]">
        <div class="">
          <i class="fa-solid fa-xmark text-[26px] text-white close md:hidden cursor-pointer"></i>
        </div>
        <ul class="md:flex space-y-4 md:space-y-0 mt-[20%] md:mt-0">
          <li><a href="#" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700] py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Home</a></li>
          <li><a href="#about" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700]  py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Post</a></li>
          <li><a href="#" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700]  py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Chat</a></li>
          <div class="flex justify-center md:hidden">
            <div class="absolute bottom-20 flex">
              <a href="register.php"><button class="p-[3px] px-[10px] rounded-md button"><p class="text-[16px] text-white font-[600] ">Register</p></button></a>
              <p class="text-white font-[600]">|</p>
              <a href="login.php"><button class="p-[3px] px-[10px] rounded-md button"><p class="text-[16px] text-white font-[600] ">Login</p></button></a>
            </div>
          </div>
        </ul>
      </div>
      <div class="flex gap-2 navbar-button">
        <div class="hidden md:block">
          <a href="register.php"><button class="bg-transparent border-[1.8px] border-[#0055AA] p-[6px] px-[10px] rounded-md button"><p class="text-[12px] text-white font-[600] ">Register</p></button></a>
          <a href="login.php"><button class="bg-[#0055AA] p-[6px] px-[10px] rounded-md button"><p class="text-[12px] text-white font-[600] ">Login</p></button></a>
        </div>
      </div>
    </header>

  
      <div class="h-screen image flex justify-center items-center ">
        <div class="hero">
          <div class="container">
            <div class="hero-isi flex flex-col lg:flex-row lg:space-x-[50vw]">
              <div class="box ">
                <h1 class="font-[800] text-[60px] text-white lg:text-[100px] leading-[4.5rem] mb-[20px]">ALL ABOUT <br>
                Cybersec </h1>
                <button class="get-started bg-[#0055AA] p-[6px] py-[12px] px-[10px] rounded-lg"><p class="text-[12px] text-white font-[600] ">Get Started <i class="fa-solid fa-arrow-right ml-[5px]"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="h-screen" id="about">
        <div class="about">
          <div class="container mx-auto w-[100%]">
            <div class="about-judul  flex justify-center">
              <h1 class="text-white text-[30px] font-[800] mt-[100px]">About CyberSec</h1>
            </div>
              <div class="about-card p-4 md:p-20">
                <div class="container-card h-screen flex justify-center ">
                  <div class="isi-card flex flex-col gap-10 mt-[50px]  md:flex-row md:gap-[40px]">
                    <div class="card  max-w-[600px]">
                        <div class="bg-[#0055AA] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                          <p class="text-white flex gap-2 font-[600] text-[20px]"><img src="./assets/people-group-solid.svg" alt="" class="w-[20px]">Komunitas</p>
                          <p class="text-white font-[500] text-[10px]">Suatu Komunitas atau Forum dimana para penggunanya dapat bertukar informasi seputar Cyber Security</p>
                        </div>
                    </div>
                    <div class="card  max-w-[600px] max-h-[600px]">
                      <div class="bg-[#0055AA] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                        <p class="text-white flex gap-2 font-[600] text-[20px]"><i class="fa-solid fa-comments flex items-center"></i>Post</p>
                        <p class="text-white font-[500] text-[10px]">Para pengguna nya dapat memposting hal hal yang berbau Cyber Security dan dapat berinteraksi satu sama lain</p>
                      </div>
                  </div>
                  <div class="card  max-w-[600px] max-h-[600px]">
                    <div class="bg-[#0055AA] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                      <p class="text-white flex gap-2 font-[600] text-[20px]"><img src="./assets/tanyajawab.svg" alt="" class="w-[20px]">Tanya Jawab</p>
                      <p class="text-white font-[500] text-[10px]">Para pengguna dapat saling bertanya, menjawab pertanyaan, berbagi pengalaman, dan berdiskusi bersama.</p>
                    </div>
                </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

      <!-- login section -->
      
      <!-- <div class="login max-w-[800px] absolute top-[25%] right-0 left-0 shadow-lg  px-[15px] md:px-0 z-10">
        <div class="close-login absolute top-[-10px] right-[-10px]">
          <button class="button-login bg-[#fff0] backdrop-blur-1 border-[1.8px] border-[#0055AA] w-[40px] h-[40px] rounded-lg"><i class="fa-solid fa-x"></i></button>
        </div>
        <div class="container-login h-[300px] p-10 max-w-full mx-auto relative overflow-hidden">
          <form action="#" method="POST" class="flex flex-col">
            <label for="username" class="text-white font-[600] text-[12px]">Username Account:</label>
            <div class="relative w-fit">
              <input class="max-w-[200px] rounded-md mb-4 h-[30px] px-10" type="text" id="username" name="username" placeholder="Username" required>
              <i class="fa-solid fa-user absolute top-2 left-2 text-[#878383]"></i>
            </div>
            <label for="password" class="text-white font-[600] text-[12px]">Password: </label>
            <div class="relative w-fit">
              <input  class="max-w-[200px] rounded-md h-[30px] px-10"  type="password" id="password" name="password" placeholder="Password" required>
              <i class="fa-solid fa-key absolute top-2 left-2 text-[#878383]"></i>
            </div>
            <div class="col-span-6">
              <button type="submit" name="register" class="inline-block shrink-0 rounded-md mt-[20px] border-[1.8px] border-blue-600 hover:border-[#0055AA]   bg-blue-600 px-10 py-2 text-sm font-medium text-white transition hover:bg-transparent focus:outline-none focus:ring active:text-blue-500">
                Login
              </button>
              <p class="mt-4 text-sm text-white ">Dont't have account ? <a href="#" class="border-b-[1px] border-[#001caa] text-[#001caa]">Sign In</a>.</p>
            </div>
          </form>
          <img src="./assets/foto-login.png" alt="" class="max-w-[200px] md:max-w-[300px] absolute top-0 right-0">
        </div>
      </div> -->
    

    
</body>

<script src="js/script.js"></script>
</html>