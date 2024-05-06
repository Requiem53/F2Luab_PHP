<?php
    include 'connect.php';
    //If not logged in, go back to index
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
    <link href="./css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Home Page</title>
</head>
<body class="bg-registerPageBackground flex flex-col justify-center items-center my-48 transition-opacity">
    <button onclick="location.href ='searchUser.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Search Users</button>
    <button onclick="location.href ='gamesOwned.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    See Games Owned</button>
    <button onclick="location.href ='dashboard.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Game Store</button>
    <button onclick="location.href ='publishGame.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Publish Games (Developer)</button>
    <button onclick="location.href ='adminPanel.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Admin Panel</button>
    <button onclick="location.href ='logout.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Logout</button>
    <img src="images\stockphoto1.jpg" class="w-1/3 h-1/3">
</body>
</html>

<?php
    $entryInfo = $_SESSION['entryStatus'];

    if(!$_SESSION['hasNotifiedUser']){
        if($entryInfo == "log"){
            echo "
                <div id=\"loginAlert\" class=\"p-5 bg-green-500 text-base text-white fixed top-4\">
                    <span id=\"closeAlert\" class=\"ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black\">&times;</span> 
                    <strong>Successfully logged in as {$currentUser}!</strong> Feel free to browse around.
                </div>
            
                <script> 
                function fadeDelay(){
                    $(\"#loginAlert\").fadeOut(400);
                }
                const timeout = setTimeout(fadeDelay, 3000);
                $(\"#closeAlert\").click(function(){
                $(\"#loginAlert\").fadeOut(100);
                });
                </script>";
        }else if($entryInfo == "reg"){
            echo "
            <div id=\"loginAlert\" class=\"p-5 bg-green-500 text-base text-white fixed top-4\">
                <span id=\"closeAlert\" class=\"ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black\">&times;</span> 
                <strong>Successfully registered as {$currentUser}!</strong> Feel free to browse around.
            </div>
        
            <script> 
            function fadeDelay(){
                $(\"#loginAlert\").fadeOut(400);
            }
            const timeout = setTimeout(fadeDelay, 3000);
            $(\"#closeAlert\").click(function(){
            $(\"#loginAlert\").fadeOut(100);
            });
            </script>";
        }
        $_SESSION['hasNotifiedUser'] = true;
    }
?>
