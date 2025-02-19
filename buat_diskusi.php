<?php
session_start();
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
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 ">
        <div class="max-w-lg w-full bg-gray-800  shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-[800] text-[#0054AA] mb-4 text-center">Buat Topik Baru</h2>
            <form method="POST" action="">
                <div class="mb-4">
                    <label class="block text-[#0054AA] font-medium mb-2">Judul</label>
                    <input type="text" name="judul" class="w-full p-3  bg-gray-600 rounded-lg focus:outline-none focus:ring-1 focus:text-white focus:ring-blue-500" placeholder="Masukkan judul topik" required>
                </div>
                <div class="mb-4">
                    <label class="block text-[#0054AA] font-medium mb-2">Deskripsi</label>
                    <textarea name="deskripsi" class="w-full p-3  bg-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:text-white focus:ring-blue-500" rows="4" placeholder="Tulis deskripsi topik..."></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>