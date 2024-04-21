<?php
    include 'connect.php';

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-[url('images/publishBG.jpg')]">
<form method="post"> 

    <div class="font-poppins text-2xl flex flex-col items-center justify-center my-8 gap-7 mx-auto w-3/12 p-14 bg-neutral-50 bg-opacity-15">
        <div class="mb-10 text-4xl text-white font-bold">Publish Game</div>
        
        <div class="relative z-0 w-full">
            <input type="text" name="nameofgame" id="floating_standard" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Name of game</label>
        </div>

        <div class="relative z-0 w-full">
            <input type="text" name="description"  id="floating_standard" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">What's it about?</label>
        </div>

        <div class="relative z-0 w-full">
            <input type="number" min="1" name="price" id="floating_standard" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Price</label>
        </div>

        <div class="relative z-0 w-full">
            <input type="text" name="developer" id="floating_standard" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Developer</label>
        </div>

        <div class="relative z-0 w-full">
            <input type="text" name="publisher" id="floating_standard" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Publisher</label>
        </div>

        <button type="submit" name="btnPublish" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">Publish</button>  
        <div class="text-white text-sm"><a href="homepage.php"><span class="underline">Go back to homepage</span></a></div>
    </div>
</form>
    
</body>
</html>



<?php
    if(isset($_POST['btnPublish'])){	
        echo 'Test';	
        $nameofgame=$_POST['nameofgame'];		
        $description=$_POST['description'];
        $price=$_POST['price'];
        $developer=$_POST['developer'];		
        $publisher=$_POST['publisher'];
        
        $sql1 ="Insert into tblpublishgame(nameofgame,description,price,developer,publisher) values('".$nameofgame."','".$description."','".$price."','".$developer."','".$publisher."')";
        mysqli_query($connection,$sql1);     
    }
?>
