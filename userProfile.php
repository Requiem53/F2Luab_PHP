<?php
    include 'connect.php';
    //If not logged in, go back to index
    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }

    if(!isset($_SERVER['currentUser'])){
        header("Location: homepage.php");
    }else{
        $visitedUser = $_SERVER['userid'];
    }

    $resultSet = $connection->query("SELECT * FROM tbluserprofile WHERE userid=$visitedUser");
    $resultSet2 = $connection->query("SELECT * FROM tbluseraccount WHERE acctid=$visitedUser");
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
    <title>Document</title>
</head>
<body class="bg-[url('../images/backgroundPfps/defaultBackground.jpg')] bg-cover flex flex-col justify-center items-center my-6 mx-auto h-full min-w-[80rem] w-[80%] gap-10">
    <div class = "h-64 min-w-[60rem] bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10" >
        <div class="flex flex-row items-center h-full ml-12">
            <img src="images/profilePics/defaultImage.jpg" class="object-scale-down h-52 w-52" style="border-radius: 50%;">
            <div class="flex flex-col ml-24 gap-10 font-poppins text-gray-50">
                <p class="text-6xl "><?php echo $resultSet2['username'] ?></p>
                <p class="text-xl"><?php echo $resultSet1['description'] ?></p>
            </div>
        </div>
    </div>

    <div class="min-h-[35rem] h-fit flex flex-row min-w-[60rem] gap-4 items-start justify-start">
        <div class = "min-h-[35rem] h-full min-w-[63.5%] p-4 gap-2 flex flex-col justify-start items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
            <div class = "min-h-[6rem] min-w-[98%] bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10"></div>
        </div>
        <div class = "min-h-[35rem] h-full min-w-[35%] p-4 gap-2 flex flex-col justify-start items-center bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
            <div class = "min-h-[6rem] min-w-[98%] bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10"></div> 
        </div>
    </div>

</body>
</html>