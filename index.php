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

<style>
.text-gradient {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
}
</style>
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-[#0a1321]">
    <header class="flex justify-between px-[20px] lg:px-[10%] py-[30px]  bg-transparent fixed w-[100%]  z-40 navbar duration-[0.2s]">
      <div class="navbar-judul">
        <h1 class="font-[700] text-[20px] judul text-white">Cyber<span class="text-[#0055AA] kata-2">Sec </span></h1>
      </div>
      <div class=" navbar-nav flex gap-3 flex-col md:flex-row absolute top-0  py-[40px] md:py-0 px-[60px] md:px-0 right-[100%] bg-[#0055AA] h-screen shadow-lg lg:bg-transparent w-screen md:w-[20%] md:h-0 md:static menu duration-[0.5s]">
        <div class="">
          <i class="fa-solid fa-xmark text-[26px] text-white close md:hidden cursor-pointer"></i>
        </div>
        <ul class="md:flex space-y-4 md:space-y-0 mt-[20%] md:mt-0">
          <li><a href="#" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700] py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Home</a></li>
          <li><a href="login.php" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700]  py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Post</a></li>
          <li><a href="login.php" class="font-[700] text-[16px] text-white lg:text-[16px] lg:font-[700]  py-[8px] px-[15px] hover:text-[#0055AA] duration-[0.2s]">Chat</a></li>
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

 

    <div class="container mx-auto px-4 py-16 relative z-10 bg-gradient-to-b from-[#0a1321] to-[#111f35]">
      <div class="flex flex-col items-center justify-center pt-16 md:pt-24">
        <!-- Section header with icon -->
        <div class="flex items-center space-x-2 mb-4">
          <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
          <i class="fas fa-shield-alt text-blue-400"></i>
          <div class="h-1 w-8 bg-blue-500 rounded-full"></div>
        </div>
        
        <h1 class="text-white text-xl md:text-4xl font-extrabold text-center max-w-4xl mb-4 tracking-tight">
          LEARN & SHARE IN THE WORLD OF 
          <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">CYBER SECURITY</span>
        </h1>
        
        <p class="text-[#bab3b3] md:text-lg text-center max-w-3xl mb-8">
          Unlocking Knowledge, Enhancing Security: A Global Cyber Security Community.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-16 md:mb-24">
          <a href="login.php" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-md shadow-lg hover:shadow-blue-900/20 transition duration-300 flex items-center justify-center group">
            <i class="fas fa-user-plus mr-2 group-hover:animate-pulse"></i> Join Community
          </a>
          <a href="#" class="px-8 py-3 bg-transparent border border-blue-500 text-blue-400 font-semibold rounded-md hover:bg-blue-900/10 transition duration-300 flex items-center justify-center">
            <i class="fas fa-book-open mr-2"></i> Learn More
          </a>
        </div>
        
        <div class="w-full max-w-[600px] mx-auto">
          <div class=" bg-[#0a1321]/50 backdrop-blur-sm p-3 rounded-xl border border-blue-500/20">
            <img src="assets/mockup1.png" alt="CyberSec Platform" class="w-full max-w-full rounded-lg shadow-2xl">
          </div>
        </div>
      </div>
    </div>
  </div>


    <section id="about" class="py-24 px-6 lg:px-20 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden"> 
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center relative z-10">
        <div data-aos="fade-right" class="space-y-6">
            <div class="flex items-center space-x-3 mb-2">
                <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
                <p class="text-blue-400 font-medium uppercase tracking-wider text-sm">WHO WE ARE</p>
            </div>
            
            <h2 class="text-5xl font-bold text-white mb-6">About <span class="text-gradient bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">CyberSec</span></h2>
            
            <p class="text-gray-300 text-lg leading-relaxed">
                CyberSec is a vibrant community for cybersecurity enthusiasts. We collaborate to share insights, enhance skills, and collectively build a safer digital ecosystem for everyone.
            </p>
            
            <div class="grid grid-cols-2 gap-6 my-8">
                <div class="flex items-start space-x-3">
                    <i class="fas fa-shield-alt text-blue-400 text-2xl mt-1"></i>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Protection</h3>
                        <p class="text-gray-400">Building defensive strategies</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3">
                    <i class="fas fa-users text-blue-400 text-2xl mt-1"></i>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Community</h3>
                        <p class="text-gray-400">Learning together</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3">
                    <i class="fas fa-code text-blue-400 text-2xl mt-1"></i>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Skills</h3>
                        <p class="text-gray-400">Practical expertise</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3">
                    <i class="fas fa-lock text-blue-400 text-2xl mt-1"></i>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Security</h3>
                        <p class="text-gray-400">Best practices</p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 mt-8">
                <a href="#" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-lg shadow-lg hover:from-blue-700 hover:to-blue-600 transition duration-300 flex items-center justify-center">
                    <i class="fas fa-user-plus mr-2"></i> Join Us
                </a>
                <a href="#" class="px-8 py-4 bg-transparent border border-blue-500 text-blue-400 font-semibold rounded-lg hover:bg-blue-900 hover:bg-opacity-20 transition duration-300 flex items-center justify-center">
                    <i class="fas fa-info-circle mr-2"></i> Learn More
                </a>
            </div>
        </div>

        <div class="flex justify-center relative" data-aos="fade-left">
            <div class="absolute inset-0 bg-blue-500 bg-opacity-10 rounded-full filter blur-3xl"></div>
            <div class="relative z-10 transform hover:scale-105 transition duration-700">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full opacity-75 blur"></div>
                <div class="relative bg-gray-900 rounded-full p-1">
                    <img src="assets/about-logo.png" alt="CyberSec Illustration" class="w-full max-w-md rounded-full">
                </div>
            </div>
        </div>
    </div>
</section>

      
<div class="bg-gradient-to-b from-[#0a1321] to-[#111f35] min-h-screen flex flex-col justify-center py-16" id="features">
  <div class="container mx-auto px-4">

    <div class="flex flex-col items-center justify-center mb-12">
      <div class="flex items-center space-x-3 mb-3">
        <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
        <i class="fas fa-rocket text-blue-400"></i>
        <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
      </div>
      
      <h2 class="text-xl md:text-3xl font-extrabold text-white text-center mb-3">
        OTHER <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">FEATURES</span> THAT WE ALSO HAVE
      </h2>
      
      <p class="text-[#bab3b3] text-sm md:text-lg text-center max-w-lg mb-2">
        More Ways We Enhance Your Experience.
      </p>
      
      <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mt-4"></div>
    </div>
    

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-5xl mx-auto">
 
      <div class="group">
        <div class="relative overflow-hidden rounded-xl">
         
          <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-70 transition duration-300 blur-sm rounded-xl"></div>
          

          <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-700/50 h-full transition-all duration-300 group-hover:shadow-lg group-hover:shadow-blue-500/20">
            <div class="flex flex-col h-full">
             
              <div class="bg-blue-500/10 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-all duration-300">
                <i class="fas fa-users text-blue-400 text-xl"></i>
              </div>
              
              <h3 class="text-white text-xl font-bold mb-2 group-hover:text-blue-400 transition-colors duration-300">Community</h3>
              
              <p class="text-gray-300 text-sm leading-relaxed">
                A community or forum where users can exchange information about Cyber Security, collaborate on projects, and build a network of like-minded professionals.
              </p>
              
             
            </div>
          </div>
        </div>
      </div>
      

      <div class="group">
        <div class="relative overflow-hidden rounded-xl">
         
          <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-70 transition duration-300 blur-sm rounded-xl"></div>
          
          <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-700/50 h-full transition-all duration-300 group-hover:shadow-lg group-hover:shadow-blue-500/20">
            <div class="flex flex-col h-full">
              
              <div class="bg-blue-500/10 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-all duration-300">
                <i class="fas fa-comments text-blue-400 text-xl"></i>
              </div>
              
              <h3 class="text-white text-xl font-bold mb-2 group-hover:text-blue-400 transition-colors duration-300">Post</h3>
              
              <p class="text-gray-300 text-sm leading-relaxed">
                Users can post content related to Cyber Security and interact with each other through comments, likes, and shares, creating an engaging knowledge exchange platform.
              </p>
              
              
            </div>
          </div>
        </div>
      </div>
      

      <div class="group">
        <div class="relative overflow-hidden rounded-xl"> 
          <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-70 transition duration-300 blur-sm rounded-xl"></div>
          
        
          <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-700/50 h-full transition-all duration-300 group-hover:shadow-lg group-hover:shadow-blue-500/20">
            <div class="flex flex-col h-full">
         
              <div class="bg-blue-500/10 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-all duration-300">
                <i class="fas fa-question-circle text-blue-400 text-xl"></i>
              </div>
              
              <h3 class="text-white text-xl font-bold mb-2 group-hover:text-blue-400 transition-colors duration-300">Question and answer</h3>
              
              <p class="text-gray-300 text-sm leading-relaxed">
                Users can ask and answer questions, share experiences, and engage in discussions together about cybersecurity challenges, solutions, and best practices.
              </p>
              
    
            </div>
          </div>
        </div>
      </div>
      
      <div class="group">
        <div class="relative overflow-hidden rounded-xl">
          <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-0 group-hover:opacity-70 transition duration-300 blur-sm rounded-xl"></div>
          

          <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-700/50 h-full transition-all duration-300 group-hover:shadow-lg group-hover:shadow-blue-500/20">
            <div class="flex flex-col h-full">

              <div class="bg-blue-500/10 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-all duration-300">
                <i class="fas fa-newspaper text-blue-400 text-xl"></i>
              </div>
              
              <h3 class="text-white text-xl font-bold mb-2 group-hover:text-blue-400 transition-colors duration-300">Artikel & Blog</h3>
              
              <p class="text-gray-300 text-sm leading-relaxed">
                Stay ahead in the cyber world! Explore the latest articles on cybersecurity, technology, and digital trends in our community from industry experts and practitioners.
              </p>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

      <div class="container mx-auto bg-gradient-to-br from-gray-900 to-gray-800 lg:flex lg:flex-col lg:justify-center rounded-2xl py-16 px-4 lg:px-20" id="why"> 
          <div class="flex flex-col items-center justify-center">
            <div class="flex items-center space-x-3 mb-3">
              <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
              <i class="fa-solid fa-shield text-blue-400"></i>
              <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
            </div>
            
            <h2 class="text-xl md:text-3xl font-extrabold text-white text-center mb-3">
               WHY <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">CYBERSEC </span>MATTERS
            </h2>
            
            <p class="text-[#bab3b3] text-sm md:text-lg text-center max-w-lg mb-2">
              Making Digital Spaces Safer for Everyone.
            </p>
            
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mt-4"></div>
          </div>

          <div class="content-kenapa mt-[40px] grid lg:grid-cols-2 gap-6 lg:gap-0">
            <div class="flex flex-col">
              <div class="isi-alasan flex items-center gap-2 border-b-2 border-[#0055AA] py-4">
                <div class="icon-alasan border-[2.5px] border-white p-2  rounded-[50px]">
                   <i class="fa-solid fa-arrow-pointer text-xl w-[30px] h-[30px] flex justify-center items-center text-white"></i>
                </div>
                <div class="alasan leading-[22px]">
                  <h2 class='text-white font-[600] text-[18px] md:text-[24px]'>Easy to Use</h2>
                  <p class='text-[#e2e3e4] leading-[14px] md:leading-normal text-[14px] md:text-[16px]'>An intuitive and user-friendly interface allows anyone to ask questions effortlessly.</p>
                </div>
              </div>

              <div class="isi-alasan flex items-center gap-2 border-b-2 border-[#0055AA] py-4">
                <div class="icon-alasan border-[2.5px] border-white p-2 rounded-[50px]">
                <i class="fa-solid fa-brain text-xl w-[30px] h-[30px] flex justify-center items-center text-white"></i>
                </div>
                <div class="alasan leading-[22px]">
                  <h2 class='text-white font-[600] text-[18px] md:text-[24px]'>Knowledge Sharing </h2>
                  <p class='text-[#e2e3e4] leading-[14px] md:leading-normal text-[14px] md:text-[16px]'> Stay updated with the latest cybersecurity trends and insights.</p>
                </div>
              </div>

              <div class="isi-alasan flex items-center gap-2 border-b-2 border-[#0055AA] py-4">
                <div class="icon-alasan border-[2.5px] border-white p-2 rounded-[50px]">
                <i class="fa-solid fa-users text-xl w-[30px] h-[30px] flex justify-center items-center text-white"></i>
                </div>
                <div class="alasan leading-[22px]">
                  <h2 class='text-white font-[600] text-[18px] md:text-[24px]'>Supportive Community</h2>
                  <p class='text-[#e2e3e4] leading-[14px] md:leading-normal text-[14px] md:text-[16px]'> Connect with like-minded individuals and industry professionals.</p>
                </div>
              </div>
              <div class="isi-alasan flex items-center gap-2 border-b-2 border-[#0055AA] py-4">
                <div class="icon-alasan border-[2.5px] border-white p-2 rounded-[50px]">
                <i class="fa-solid fa-rocket text-xl w-[30px] h-[30px] flex justify-center items-center text-white"></i>
                </div>
                <div class="alasan leading-[22px]">
                  <h2 class='text-white font-[600] text-[18px] md:text-[24px]'> Skill Development</h2>
                  <p class='text-[#e2e3e4] leading-[14px] md:leading-normal text-[14px] md:text-[16px]'> Hone your expertise through in-depth discussions, experience sharing, and collaboration with cybersecurity experts.</p>
                </div>
              </div>
            </div>
            <div class="">
              <img class='m-auto rounded-2xl' src="assets/mockup1.png" alt="" width="400px"/>
            </div>
          </div>
      </div> 

      <section class="bg-gradient-to-b from-[#0a1321] to-[#111f35] h-full" id="faq">
        <div class="max-w-2xl mx-auto pb-20 p-5 ">
            <div class="flex flex-col items-center justify-center mb-4">
              <div class="flex items-center space-x-3 mb-3">
                <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
                <i class="fa-solid fa-question text-blue-400"></i>
                <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
              </div>
              
              <h2 class="text-xl md:text-3xl font-extrabold text-white text-center mb-3">
                FREQUENTLY <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">ASKED</span>  QUESTIONS
              </h2>
              <p class="text-[#bab3b3] text-sm md:text-lg text-center max-w-lg mb-2">
                Find Answers to Your Most Common Concerns.
              </p>
              <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mt-4"></div>
            </div>
            <div class="space-y-4">
                <div class="border border-gray-700 rounded-lg overflow-hidden">
                    <button class="w-full p-4 text-left flex justify-between items-center bg-gray-800 hover:bg-gray-700 faq-toggle">
                        <span class="text-white font-bold">What is CyberSec?</span>
                        <i class="icon fas fa-chevron-down text-white"></i>
                    </button>
                    <div class="p-4 hidden bg-gray-700 text-white">CyberSec is a community dedicated to cybersecurity discussions and learning.</div>
                </div>
                <div class="border border-gray-700 rounded-lg overflow-hidden">
                    <button class="w-full p-4 text-left flex justify-between items-center bg-gray-800 hover:bg-gray-700 faq-toggle">
                        <span class="text-white font-bold">How do I join CyberSec?</span>
                        <i class="icon fas fa-chevron-down text-white"></i>
                    </button>
                    <div class="p-4 hidden bg-gray-700 text-white">You can join by registering on our platform and becoming a part of our secure community.</div>
                </div>
                <div class="border border-gray-700 rounded-lg overflow-hidden">
                    <button class="w-full p-4 text-left flex justify-between items-center bg-gray-800 hover:bg-gray-700 faq-toggle">
                        <span class="text-white font-bold">Is CyberSec free to use?</span>
                        <i class="icon fas fa-chevron-down text-white"></i>
                    </button>
                    <div class="p-4 hidden bg-gray-700 text-white">Yes! CyberSec is completely free for anyone passionate about cybersecurity.</div>
                </div>
              </div>
            </div>
      </section>
        



        <section class="py-16 px-6 lg:px-20 bg-gradient-to-br from-gray-900 to-gray-800 mx-auto" id="testimoni">
          <div class="max-w-7xl">
            <div class="flex flex-col items-center justify-center mb-4">
              <div class="flex items-center space-x-3 mb-3">
                <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
                <i class="fa-solid fa-comment text-blue-400"></i>
                <div class="h-1 w-12 bg-blue-500 rounded-full"></div>
              </div>
              
              <h2 class="text-xl md:text-3xl font-extrabold text-white text-center mb-3">
                WHAT <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">OUR</span>  USERS SAY
              </h2>
              
              <p class="text-[#bab3b3] text-sm md:text-lg text-center max-w-lg mb-2">
              Real experiences from users who have grown with CyberSec.
              </p>
              <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mt-4"></div>
            </div>
            <div class="isi-testimoni mt-10">
              <div class="mx-auto grid md:grid-cols-3 gap-6 justify-center">
                  <div class="max-w-md bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                      <h2 class="text-xl font-bold">Pengalaman Luar Biasa di CyberSec!</h2>
                      <p class="mt-2 text-gray-300">
                      "CyberSec benar-benar membantu saya memahami dunia keamanan siber dengan lebih baik. Forum diskusinya aktif, dan saya belajar banyak dari para ahli di komunitas ini!"
                      </p>
                      <div class="mt-4 flex items-center gap-3 border-t border-gray-600 pt-4">
                          <img src="assets/31.png" alt="User Image" class="w-12 h-12 rounded-full object-cover">
                          <div>
                              <p class="font-semibold">Andi</p>
                              <p class="text-gray-400 text-sm">Cyber Enthusiast</p>
                          </div>
                      </div>
                  </div>

                  <div class="max-w-md bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                      <h2 class="text-xl font-bold">CyberSec, Komunitas Terbaik untuk Belajar Keamanan Siber!</h2>
                      <p class="mt-2 text-gray-300">
                      "Sebagai pemula di dunia cybersecurity, saya sangat terbantu dengan materi dan diskusi yang ada di CyberSec. Lingkungan belajarnya sangat mendukung!"
                      </p>
                      <div class="mt-4 flex items-center gap-3 border-t border-gray-600 pt-4">
                          <img src="assets/32.png" alt="User Image" class="w-12 h-12 rounded-full object-cover">
                          <div>
                              <p class="font-semibold">Dina</p>
                              <p class="text-gray-400 text-sm">IT Student</p>
                          </div>
                      </div>
                  </div>

                  <div class="max-w-md bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                      <h2 class="text-xl font-bold">CyberSec is Amazing</h2>
                      <p class="mt-2 text-gray-300">
                      "Saya sudah bekerja di bidang keamanan siber selama beberapa tahun, dan CyberSec adalah salah satu komunitas terbaik yang pernah saya ikuti. Berbagi ilmu di sini sangat menyenangkan!"
                      </p>
                      <div class="mt-4 flex items-center gap-3 border-t border-gray-600 pt-4">
                          <img src="assets/33.png" alt="User Image" class="w-12 h-12 rounded-full object-cover">
                          <div>
                              <p class="font-semibold">Fajar</p>
                              <p class="text-gray-400 text-sm">IT Enthusiast</p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </section>


    <footer class="bg-gradient-to-b from-[#0a1321] to-[#050a14] pt-16 text-gray-300 relative overflow-hidden">
      <div class="container mx-auto px-6 relative z-10">
  
        <div class="flex flex-col lg:flex-row justify-between pb-10 border-b border-gray-700/50">
          
          <div class="max-w-sm mb-10 lg:mb-0">
            <div class="flex items-center mb-4">
              <i class="fas fa-shield-alt text-blue-400 text-2xl mr-2"></i>
              <h2 class="text-2xl font-bold text-white">CyberSec</h2>
            </div>
            <p class="text-gray-400 mb-6">
              A community for cybersecurity enthusiasts. We share insights, enhance skills, and build a safer ecosystem for everyone.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="bg-blue-900/30 hover:bg-blue-900/50 w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                <i class="fab fa-twitter text-blue-400"></i>
              </a>
              <a href="#" class="bg-blue-900/30 hover:bg-blue-900/50 w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                <i class="fab fa-linkedin-in text-blue-400"></i>
              </a>
              <a href="#" class="bg-blue-900/30 hover:bg-blue-900/50 w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                <i class="fab fa-github text-blue-400"></i>
              </a>
              <a href="#" class="bg-blue-900/30 hover:bg-blue-900/50 w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                <i class="fab fa-discord text-blue-400"></i>
              </a>
            </div>
          </div>
        
          <div>
            <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Home</a></li>
              <li><a href="#about" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> About Us</a></li>
              <li><a href="#features" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Features</a></li>
              <li><a href="#why" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Reason</a></li>
              <li><a href="#faq" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> FAQ</a></li>
              <li><a href="#testimoni" class="text-gray-400 hover:text-blue-400 transition duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> TESTIMONIALS</a></li>
            </ul>
          </div>
          
         
          <div>
            <h3 class="text-lg font-semibold text-white mb-6">Contact Us</h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                <span class="text-gray-400">Cyber Security Surabaya</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-envelope text-blue-400 mr-3"></i>
                <a href="mailto:info@cybersec.com" class="text-gray-400 hover:text-blue-400 transition duration-300">info@cybersec.com</a>
              </li>
              <li class="flex items-center">
                <i class="fas fa-phone-alt text-blue-400 mr-3"></i>
                <a href="tel:+1234567890" class="text-gray-400 hover:text-blue-400 transition duration-300">+123 456 7890</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
          
        <div class="py-6 border-t border-gray-700/50 flex flex-col md:flex-row justify-center items-center">
          <div class="text-gray-500 text-sm mb-4 md:mb-0">
            © 2025 CyberSec. All rights reserved.
          </div>
        </div>
      </div>
    </footer>


    
</body>

<script src="js/script.js"></script>

<script>
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', function () {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.icon');
                
                if (answer.classList.contains('hidden')) {
                    document.querySelectorAll('.faq-toggle + div').forEach(div => div.classList.add('hidden'));
                    document.querySelectorAll('.faq-toggle .icon').forEach(icon => {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    });
                    answer.classList.remove('hidden');
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });
</script>
</html>