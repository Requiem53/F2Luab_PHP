<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="js\jquery-3.7.1.js"></script>
    <title>PixelPulse Games</title>
</head>
<body class="bg-[url('https://static.vecteezy.com/system/resources/previews/002/539/942/non_2x/dark-purple-smart-blurred-pattern-abstract-illustration-with-gradient-blur-design-new-design-for-applications-vector.jpg')] bg-cover bg-no">


    <!--NAV BAR STARTS HERE-->

<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 left-0 right-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="images/GamingLogo.svg" class="h-8" alt="PixelPulse Games Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PixelPulse Games</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="gameStore.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Search Game</a>
        </li>
        <li>
          <a href="searchUser.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Community</a>
        </li>
        <li>
          <a href="register.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
        </li>
        <li>
          <a href="login.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

<!--NAV BAR END-->

    



   <div class="columns-2 mt-24 md:columns-0">

    <h1 class="mb-4 ml-10 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gaming Innovation,</span> Pixel by Pixel</h1>

    <p class="text-m ml-10 font-20px text-gray-500 lg:text-l dark:text-gray-400">Gaming innovation comes to life, one pixel at a time. A world where every pixel pulses with creativity and excitement, shaping unforgettable gaming experiences.</p>

    <img src="images/indexImg.png" class="w-45 h-auto" alt="">

     <!--SIGN IN CARD-->
    
   </div>
    




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> 
</body>
</html>