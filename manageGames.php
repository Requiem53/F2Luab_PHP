<?php
    include_once('connect.php');

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
        exit();
    } else {
        $currentUser = $_SESSION['currentUser'];
    }

    // Fetch games from the database
    $resultset = $connection->query("SELECT * FROM tblpublishgame");
    $numOfPublishedGames = mysqli_num_rows($resultset);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="js/jquery-3.7.1.js"></script>
    <title>Manage Games</title>
</head>

<body class="bg-[url('images/backgroundFeatures/spaceBg.jpg')] bg-contain bg-scroll">

    <div id="mainContainer" class="m-10 bg-blue-0 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-20 border border-gray-100 py-10 px-5">

        <h1 class="text-white text-lg">Manage Games</h1>
        
        <?php if ($numOfPublishedGames > 0): ?>
            <?php while ($row = $resultset->fetch_assoc()): ?>
                <div id="gameContainer-<?php echo $row['gameID']; ?>" class="my-5 mx-auto bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 px-5 py-2">
                    <div id="listgame" class="my-5 mx-auto bg-gray-200 shadow-lg rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 p-5">
                        <div id="flexContainer" class="mx-14 flex justify-between items-center">
                            <h1 id="nameOfGame" class="text-white text-[25px] font-bold"><?php echo htmlspecialchars($row['nameofgame']); ?></h1>
                            <div id="priceOfgame" class="bg-blue-100 text-blue-800 text-lg font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                                Price: <?php echo htmlspecialchars($row['price']) == 0 ? 'Free' : htmlspecialchars($row['price']); ?>
                            </div>
                        
                        </div>
                        <div class="text-white text-lg mt-5 mx-14 font-semibold">Description</div>
                        <br>

                        <p id="gameDescription" class="mx-14 mb-5 text-white"><?php echo htmlspecialchars($row['description']); ?></p>
                        <div id="flexContainer" class="flex justify-between">

                            <form method="post" action="">
                                <input type="hidden" name="gameId" value="<?php echo $row['gameID']; ?>">
                                <button type="submit" name="btnDelete" onclick="return confirm('Are you sure you want to delete this game?')" class="min-w-[10px] min-h-[3rem] w-[13rem] px-5 text-white bg-red-500 hover:bg-red-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-70 mx-14">Remove from Store</button>
                            </form>
                       
                           <?php if (isset($row['gameID'])): ?>
                                <a href="editGameInventory.php?gameid=<?php echo $row['gameID']; ?>">
                                    <button class="min-w-[10px] min-h-[3rem] w-[13rem] px-5 text-white bg-blue-500 hover:bg-blue-600 shadow-lg rounded-lg bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-70 mx-14">Change</button>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <?php
                if (isset($_POST['btnDelete']) && isset($_POST['gameId']) && $_POST['gameId'] == $row['gameID']) {
                    // Delete the game
                    $gameIdToDelete = $_POST['gameId'];
                    $sql = "DELETE FROM tblpublishgame WHERE gameid='$gameIdToDelete'";
                    if (mysqli_query($connection, $sql)) {
                        echo "<script>alert('Record deleted successfully'); window.location.href = window.location.pathname;</script>";
                        exit();
                    } else {
                        echo "<script>alert('Error deleting record: " . mysqli_error($connection) . "');</script>";
                    }
                }
                ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-white">No games published yet.</p>
        <?php endif; ?>

    </div> <!-- MAIN CONTAINER -->





    
</body>
</html>
