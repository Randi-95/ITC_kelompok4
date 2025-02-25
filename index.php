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

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jersey+15&family=League+Spartan:wght@100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="">
    <header class="flex justify-between px-[20px] lg:px-[10%] py-[20px]  bg-transparent fixed w-[100%]  z-40 navbar duration-[0.5s]">
      <div class="navbar-judul">
        <h1 class="font-[700] text-[20px] judul text-white">Cyber<span class="text-[#0055AA] kata-2">Sec </span></h1>
      </div>
      <div class=" navbar-nav flex gap-3 flex-col md:flex-row absolute top-0  py-[40px] md:py-0 px-[60px] md:px-0 right-[100%] bg-[#0055AA] h-screen shadow-lg lg:bg-transparent w-screen md:w-[20%] md:h-0 md:static menu duration-[0.5s]">
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
        <i class="fa-solid fa-bars flex items-center hamburger text-white md:hidden text-[30px] cursor-pointer"></i>
      </div>
    </header>

    
    <div class="relative h-screen image flex justify-center items-center bg-center bg-cover bg-gradient-to-b from-transparent to-[#0A192F]"
      style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('assets/hero-bg.jpg');">
    <div class="absolute bottom-0 left-0 w-full h-[150px] bg-gradient-to-t from-[#0a1321] to-transparent"></div>
    
    <div class="hero relative z-10">
      <div class="container">
        <div class="hero-isi flex flex-col lg:flex-row lg:space-x-[50vw]">
          <div class="box">
            <h1 class="font-[800] text-[60px] text-white lg:text-[100px] leading-[4.5rem] mb-[20px]">
              ALL ABOUT <br> Cybersec
            </h1>
            <button class="bg-[#0055AA] p-[6px] py-[12px] px-[10px] rounded-lg">
              <p class="text-[12px] text-white font-[600]">Get Started <i class="fa-solid fa-arrow-right ml-[5px]"></i></p>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>

    


      <div class=" pb-[20px] bg-[#0a1321]" id="about">
        <div class="about">
          <div class="container mx-auto w-[100%]">
            <div class="about-judul  flex justify-center flex-col items-center">
              <h1 class="text-white text-[14px] md:text-[25px] font-[800] mt-[100px]">LEARN & SHARE IN THE WORLD OF CYBER SECURTY</h1>
              <p class="text-[#bab3b3] w-[80%] text-[10px] md:text-[16px] text-center">Unlocking Knowledge, Enhancing Security: A Global Cyber Security Community.</p>
            </div>
              <div class="about-card p-4 md:p-20 w-[80%] mx-auto">
                <div class="container-card flex justify-center md:mt-[-120px]">
                  <div class="isi-forum flex justify-center">
                    <img src="assets/mockup1.png" alt="" class="max-w-[500px] w-[98%] md:w-[100%]">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      
  <div class="bg-[#0a1321] h-full min-h-screen" id="about">
    <div class="about h-full">
      <div class="container mx-auto w-full">
        <div class="about-judul flex flex-col items-center justify-center pt-8">
          <h1 class="text-white text-[14px] md:text-[25px] font-[800]">
            OTHER FEATURES THAT WE ALSO HAVE
          </h1>
          <p class="text-[#bab3b3] w-[80%] text-[10px] md:text-[16px] text-center">
            More Ways We Enhance Your Experience.
          </p>
        </div>
        <div class="about-card p-4 md:p-6">
          <div class="container-card flex justify-center">
            <div class="isi-card grid gap-[14px] md:grid-cols-2 md:grid-rows-2 mt-[10px] md:gap-[20px]">
              <div class="card max-w-[400px]">
                <div class="bg-[#173b74] border border-[#667386] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                  <p class="text-white flex gap-2 font-[600] text-[20px]">
                    <img src="./assets/people-group-solid.svg" alt="" class="w-[20px]">Komunitas
                  </p>
                  <p class="text-white font-[500] text-[10px]">
                    A community or forum where users can exchange information about Cyber Security.
                  </p>
                </div>
              </div>
              <div class="card max-w-[400px]">
                <div class="bg-[#173b74] border border-[#667386] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                  <p class="text-white flex gap-2 font-[600] text-[20px]">
                    <i class="fa-solid fa-comments flex items-center"></i>Post
                  </p>
                  <p class="text-white font-[500] text-[10px]">
                    Users can post content related to Cyber Security and interact with each other.
                  </p>
                </div>
              </div>
              <div class="card max-w-[400px]">
                <div class="bg-[#173b74] border border-[#667386] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                  <p class="text-white flex gap-2 font-[600] text-[20px]">
                    <img src="./assets/tanyajawab.svg" alt="" class="w-[20px]">Tanya Jawab
                  </p>
                  <p class="text-white font-[500] text-[10px]">
                    Users can ask and answer questions, share experiences, and engage in discussions together.
                  </p>
                </div>
              </div>
              <div class="card max-w-[400px]">
                <div class="bg-[#173b74] border border-[#667386] p-[20px] rounded-lg h-[200px] flex flex-col justify-center">
                  <p class="text-white flex gap-2 font-[600] text-[20px] items-center">
                    <i class="fa-regular fa-newspaper text-[20px]"></i>Artikel & Blog
                  </p>
                  <p class="text-white font-[500] text-[10px]">
                    Stay ahead in the cyber world! Explore the latest articles on cybersecurity, technology, and digital trends in our community.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>




      <div class="">

      </div>
    

    
</body>

<script src="js/script.js"></script>
</html>