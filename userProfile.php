<?php
    include 'connect.php';
    //If not logged in, go back to index
    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }

    if(!isset($_GET['username'])){
        header("Location: homepage.php");
    }else{
        $visitedUser = $_GET['username'];
    }

    $resultSet = $connection->query("SELECT * FROM tbluseraccount WHERE username='$visitedUser'");

    $userExists = mysqli_num_rows($resultSet);

    if($userExists <= 0){
        header("Location: homepage.php");
    }

    $userAccount = $resultSet->fetch_assoc();
    $userID = $userAccount['acctid'];
    
    $resultSet2 = $connection->query("SELECT * FROM tbluserprofile WHERE acctid=$userID");
    $userProfile = $resultSet2->fetch_assoc();

    //Games
    $allGames = $connection->query("SELECT tblpublishgame.nameofgame, tblpublishgame.gameID as gameID FROM tblgamesbought
    RIGHT JOIN tblpublishgame ON tblpublishgame.gameid=tblgamesbought.gameBought
    WHERE tblgamesbought.userID = $userID");
    $numOfGames = mysqli_num_rows($allGames); 
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <link href="./css/userProfile.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title><?php echo $userAccount['username'] ?>'s Profile</title>
</head>
<body class="bg-[url('../images/backgroundPfps/defaultBackground.jpg')] bg-cover flex flex-col justify-center items-center my-6 mx-auto h-full min-w-[80rem] w-[80%] gap-10">


    <div class = "h-64 min-w-[60rem] bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10" >
        <div class="flex flex-row items-center h-full ml-12">
            <img src="images/profilePics/defaultImage.jpg" class="object-scale-down h-52 w-52" style="border-radius: 50%;">
            <div class="flex flex-col ml-24 gap-10 font-poppins text-gray-50">
                <p class="text-6xl "><?php echo $userAccount['username'] ?></p>
                <p class="text-xl"><?php echo $userProfile['description'] ?></p>
            </div>
        </div>
    </div>

    <div class="min-h-[35rem] h-fit flex flex-row min-w-[60rem] gap-4 items-start justify-start font-poppins text-white">
        <div class = "min-h-[35rem] h-fit min-w-[63.5%] p-4 gap-2 flex flex-col justify-start items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
            <p class="text-xl">Games Owned</p>  
            <div class="flex flex-col justify-start items-start gap-4">
                <?php if($numOfGames > 0){ while ($row = $allGames->fetch_assoc()): ?>
                    <div userSection="<?php echo $row['nameofgame']?>" class = "min-h-[8rem] w-full h-[8rem] mx-auto bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
                        <div class="flex flex-row items-center h-full ml-10 gap-6">
                            <div class="flex flex-row items-center h-full w-[55%] gap-6">
                                <img src="gamePics/<?php echo $row['nameofgame']?>/titleImage.jpg" class="object-scale-down h-24 w-24">
                                <p class="text-2xl text-white"><?php echo $row['nameofgame']?></p>
                            </div>
                            <div class="flex flex-row items-center justify-end h-full w-[38%] gap-6">
                                <button onclick="location.href ='gamePage.php?gameID=<?php echo $row['gameID'] ?>'" class="min-w-[12rem] min-h-[3rem] w-[12rem] h-[3rem] px-5 text-2xl text-white bg-blue-500 hover:bg-blue-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-25">
                                    View Game</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; }?>  
            </div>
            
            <!-- <div class = "min-h-[6rem] min-w-[98%] bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10"></div> -->
        </div>
        <div class = "min-h-[35rem] h-full min-w-[35%] p-4 gap-2 flex flex-col justify-start items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
            <p class="text-xl">Actions</p>       
            <button onclick="location.href ='editUser.php?userID=<?php echo $userID?>'" class="min-h-[3rem] min-w-[24rem] h-[3rem] px-5 text-2xl text-white bg-blue-500 hover:bg-blue-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-25">
                Edit Profile</button>
        </div>
    </div>

</body>
</html>