<?php
    include 'connect.php';
    //If not logged in, go back to index
    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }

    if(!isset($_GET['gameID'])){
        header("Location: gameStore.php");
    }else{
        $visitedGame= $_GET['gameID'];
    }

    $resultSet = $connection->query("SELECT * FROM tblpublishgame WHERE gameID=$visitedGame");
    $game = $resultSet->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <link href="./css/gamePage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title><?php echo $game['nameofgame'] ?></title>
</head>
<body class="bg-[url('../images/backgroundFeatures/searchUserBG.jpg')] bg-cover flex flex-col justify-center items-center my-6 mx-auto h-full min-w-[80%] w-[80%] gap-1">
  
    <div class="flex flex-col justify-center items-start">
        <div class="flex flex-row justify-center items-center">
            <button onclick="location.href ='gameStore.php'" class="flex items-center justify-center w-8 h-8 my-2 text-indigo-600 transition-colors duration-150 bg-gray-200 shadow-2xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 rounded-xl focus:shadow-outline hover:bg-indigo-100">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg></button>
            <div class="text-2xl font-poppins text-white ml-4 bg-gray-100 shadow-xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-25">
            <?php echo $game['nameofgame'] ?></div>
        </div>
        
        <div class="min-h-[25rem] h-fit flex flex-row min-w-[60rem] w-[60rem] gap-4 items-start justify-start">
            <div class = "min-h-[25rem] h-full min-w-[63.5%] p-4 gap-2 flex flex-col justify-center items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
                <img src="gamePics/<?php echo $game['nameofgame'] ?>/backgroundImage.jpg" style="border-radius: 5%;">
            </div>
            <div class = "min-h-[25rem] h-full min-w-[35%] p-4 gap-2 flex flex-col justify-start items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
                <img src="gamePics/<?php echo $game['nameofgame'] ?>/titleImage.jpg" style="border-radius: 5%;">
                <h2 class="font-poppins text-white my-2"><?php echo $game['description'] ?></h2>
            </div>
        </div>
        <div class = "min-h-[5rem] h-[5rem] min-w-[38.1rem] w-[38.1rem] my-4 bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
            <div class="flex flex-row items-center h-full ml-10 gap-6">
                <div class="flex flex-row items-center h-full w-[55%] gap-6">
                    <p class="text-2xl text-white">Buy <?php echo $game['nameofgame'] ?></p>
                </div>
                <div class="flex flex-row items-center justify-end h-full w-[38%] gap-6">
                    <button class="min-w-[12rem] min-h-[3rem] w-[12rem] h-[3rem] px-5 text-2xl text-white bg-blue-500 hover:bg-blue-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-25">
                        P<?php echo $game['price'] ?>.00</button>
            </div>
        </div>
    </div>
    

</body>
</html>