<?php
session_start();
if(!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "insert into topik (judul, deskripsi, tanggal, id_user) values (:judul, :deskripsi, now(), :id_user)";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'judul' => $_POST['judul'],
        'deskripsi' => $_POST['deskripsi'],
        'id_user' => $_SESSION['user']['id'],
    ));
    header("location: buat_diskusi.php?sukses=1");
    exit;
}
?>



<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- tailwind -->
  
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
    <style>
  .bg-gradient {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    }
    
    .form-container {
      background: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .input-field {
      background: rgba(51, 65, 85, 0.5);
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
    }
    
    .input-field:focus {
      background: rgba(51, 65, 85, 0.8);
      border-color: #3b82f6;
      box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
    }
    
    .btn-submit {
      background: linear-gradient(90deg, #0054AA 0%, #0ea5e9 100%);
      transition: all 0.3s ease;
    }
    
    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 84, 170, 0.3);
    }
    
    .success-alert {
      animation: fadeIn 0.5s ease-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="min-h-screen flex items-center justify-center bg-gradient p-4">
    <div class="max-w-md w-full form-container rounded-xl shadow-2xl p-8 relative overflow-hidden">

      <div class="absolute -top-20 -right-20 w-40 h-40 bg-blue-500 rounded-full opacity-10"></div>
      <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-blue-300 rounded-full opacity-10"></div>
      
      <h2 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-sky-400 mb-6 text-center">
        Buat Topik Baru
      </h2>
      <?php
      if(isset($_GET['sukses']) && $_GET['sukses'] == '1') {
          echo '<div class="success-alert mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span>Topik berhasil dibuat!</span>
                </div>';
      }
      ?>
      
      <form method="POST" action="" class="space-y-6">
        <div>
          <label class="block text-blue-400 font-medium mb-2">Judul</label>
          <input 
            type="text" 
            name="judul" 
            class="input-field w-full p-4 text-gray-200 rounded-lg focus:outline-none" 
            placeholder="Masukkan judul topik yang menarik..."
            required
          >
        </div>
        
        <div>
          <label class="block text-blue-400 font-medium mb-2">Deskripsi</label>
          <textarea 
            name="deskripsi" 
            class="input-field w-full p-4 text-gray-200 rounded-lg focus:outline-none" 
            rows="5" 
            placeholder="Jelaskan topik Anda dengan detail..."
          ></textarea>
        </div>
        
        <button 
          type="submit" 
          class="btn-submit w-full text-white py-4 px-6 rounded-lg font-medium text-lg flex items-center justify-center"
        >
          <span>Kirim Topik</span>
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </button>
      </form>
    </div>
  </div>
</body>
</html>