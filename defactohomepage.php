<?php
    include_once('connect.php');

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }
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
    <title>Home Page</title>
</head>

<body class="bg-[url('https://images.pexels.com/photos/1287145/pexels-photo-1287145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-no-repeat">

    


<!--NAV BAR STARTS HERE-->

<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 left-0 right-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="images/GamingLogo.svg" class="h-8" alt="PixelPulse Games Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PixelPulse Games</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="images/profilePics/defaultImage.jpg" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">Anna Bortion</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Library</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
            <a href="homepage.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Redirector</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

<!--NAV BAR END-->

<br>
<br>
<br>
<br>

    
        <center><h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-5xl dark:text-white">See our Top Games</h1></center>

        <p class="mb-8 text-lg font-normal text-white-500 lg:text-xl sm:px-16 lg:px-48 dark:text-white-200">We're dedicated to exploring gaming markets teeming with opportunity, leveraging cutting-edge technology to unlock unparalleled gaming adventures and propel the industry to new heights.</p>  


 <br>
 <br>

 <!--Action Games-->

 <h2 class="text-4xl font-extrabold dark:text-white ml-10 mb-5">Action Games</h2>

 <div class="grid grid-cols-5 gap-4 mx-10">
    <!--A GAME 1-->
    <div>
        <div class="max-w-sm h-full w-full bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
            <a href="#">
                <img class="rounded-t-lg h-50" src="https://assetsio.gnwcdn.com/ghostrunner_02.png?width=1200&height=1200&fit=crop&quality=100&format=png&enable=upscale&auto=webp" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Ghostrunner 2</h5>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">P 1,000</span>
                </a>

            </div>
        </div>
    </div>

    <!--A GAME 2-->
    <div>
        <div class="max-w-sm h-full w-full bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
            <a href="#">
                <img class="rounded-t-lg" src="https://image.api.playstation.com/vulcan/ap/rnd/202210/0706/EVWyZD63pahuh95eKloFaJuC.png" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Resident Evil 4</h5>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">P 1,500</span>
                </a>

            </div>
        </div>
    </div>

    <!--A GAME 3-->
    <div>
        <div class="max-w-sm h-full w-full bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
            <a href="#">
                <img class="rounded-t-lg" src="https://image.api.playstation.com/vulcan/ap/rnd/202208/0921/dR9KJAKDW2izPbptHQbh3rnj.png" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Hogwarts Legacy</h5>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">P 2,000</span>
                </a>

            </div>
        </div>
    </div>

    <!--A-GAME 4-->
    <div>
        <div class="max-w-sm h-full w-full bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
            <a href="#">
                <img class="rounded-t-lg" src="https://image.api.playstation.com/vulcan/ap/rnd/202304/2809/df689cddd2569fc92cca9cd94d4910681b7d45e1e605806c.png" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Armored Core VI: Fires of Rubicon</h5>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">P 1,300</span>
                </a>

            </div>
        </div>
    </div>

    <!--A-GAME 5-->
    <div>
        <div class="max-w-sm h-full w-full bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
            <a href="#">
                <img class="rounded-t-lg h-45" src="https://image.api.playstation.com/cdn/EP0850/CUSA02312_00/TrjmemPhh2M0Qp346Pfy1gDobXWgb6Ig.png" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Axiom Verge</h5>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">P 599</span>
                </a>

            </div>
        </div>
    </div>
</div>

<!--END OF ACTION GAMES-->


<br>


<div class="mx-10 bg-blue-0 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-20 border border-gray-100 p-5 flex items-center justify-between gap-3">

    <center> <h2 class="text-4xl font-extrabold dark:text-white m-10">Special Discount</h2></center>


    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-5 rounded-t-lg" src="https://cdn.akamai.steamstatic.com/steam/apps/409210/ss_9aa3139e3f335121f05d530ecab15b23cc9116c3.1920x1080.jpg?t=1602690120" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Terraria</h5>
            </a>
            
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
    


    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-2">
        <a href="#">
            <img class="p-5 rounded-t-lg" src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2020/10/RAFT-Feature.jpg" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Raft</h5>
            </a>
            
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>


    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-5 rounded-t-lg" src="https://store-images.s-microsoft.com/image/apps.2678.14492077886571533.a48e9a4a-99a7-44a9-9d97-9e8e72220a7c.6b98c506-61b7-4126-80b6-449f2ff0fb96?q=90&w=480&h=270" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Minecraft</h5>
            </a>
            
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>







</div>

<br>
<br>








<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>    
</body>
</html>