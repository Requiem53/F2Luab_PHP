<?php
    include 'connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <button onclick="location.href ='publishGame.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    See Games Owned</button>
    <button onclick="location.href ='dashboard.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Game Store</button>
    <button onclick="location.href ='publishGame.php'" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">
    Publish Games (Developer)</button>
    <img src="images\stockphoto1.jpg" class="w-1/3 h-1/3">
</body>
</html>

<?php
    if(isset($_SESSION['entryStatus'])){
        $entryInfo = explode(" ", $_SESSION['entryStatus']);
        //CHANGE TO COOKIES LATER
        $_SESSION['currentUser'] = $entryInfo[1];

        if($entryInfo[0] == "log"){
            echo "
                <div id=\"loginAlert\" class=\"p-5 bg-green-500 text-base text-white fixed top-4\">
                    <span id=\"closeAlert\" class=\"ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black\">&times;</span> 
                    <strong>Successfully logged in as {$entryInfo[1]}!</strong> Feel free to browse around.
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
        }else if($entryInfo[0] == "reg"){
            echo "
            <div id=\"loginAlert\" class=\"p-5 bg-green-500 text-base text-white fixed top-4\">
                <span id=\"closeAlert\" class=\"ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black\">&times;</span> 
                <strong>Successfully registered as {$entryInfo[1]}!</strong> Feel free to browse around.
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

        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    
        if($pageWasRefreshed ) {
            unset($_SESSION['entryStatus']);
        } 
    }
?>
