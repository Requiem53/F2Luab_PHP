<?php
    include 'connect.php';

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }
?>

<?php
    //All usernames and pfps
    $allGames = $connection->query("SELECT * FROM tblpublishgame");
    $numOfGames = mysqli_num_rows($allGames); 
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/searchGame.css" rel="stylesheet">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Search Games</title>
</head>
<body class="bg-[url('../images/publishBG.jpg')] bg-auto">
    <div id="userList" class="flex flex-col justify-center items-center my-12 gap-4">
        <div class="min-w-[60rem] mx-auto">
            <div class="w-full h-14 bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 relative flex items-center focus-within:shadow-lg overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <input
                class="pl-5 text-2xl text-white placeholder-gray-200 pr-2 bg-gray-200 shadow-2xl rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 peer h-full w-full outline-none"
                type="text"
                id="search"
                onkeyup="showResult(this.value)"
                placeholder="Search a user.." /> 
            </div>
        </div>

        <?php if($numOfGames > 0){ while ($row = $allGames->fetch_assoc()): ?>
            <div userSection="<?php echo $row['nameofgame']?>" class = "min-h-[8rem] min-w-[60rem] w-[60rem] h-[8rem] mx-auto bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
                <div class="flex flex-row items-center h-full ml-10 gap-6">
                    <div class="flex flex-row items-center h-full w-[55%] gap-6">
                        <img src="gamePics/<?php echo $row['nameofgame']?>/titleImage.jpg" class="object-scale-down h-24 w-24">
                        <p class="text-4xl text-white"><?php echo $row['nameofgame']?></p>
                    </div>
                    <div class="flex flex-row items-center justify-end h-full w-[38%] gap-6">
                        <button onclick="location.href ='gamePage.php?gameID=<?php echo $row['gameID'] ?>'" class="min-w-[12rem] min-h-[3rem] w-[12rem] h-[3rem] px-5 text-2xl text-white bg-blue-500 hover:bg-blue-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-25">
                            View Game</button>
                    </div>
                </div>
            </div>
        <?php endwhile; }?>

    </div>
</body>
<script>
    function showResult(typedUser){
        console.log(`${typedUser}`);

        $(`div[userSection]`).each(function(){
            const userID = $(this).attr('userSection');
            const capsUserID = userID.toUpperCase();
            const capsTypedUser = typedUser.toUpperCase();
            if(capsUserID.includes(capsTypedUser)){
                $(this).show();
            }else{
                $(this).hide();
            }
        });
    }
</script>
</html>