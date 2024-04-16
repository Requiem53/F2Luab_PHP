<?php
    include 'connect.php';
    session_start();

    //If not logged in, go back to index
    if(!isset($_SESSION['entryStatus'])){
        header("Location: index.php");
    }
?>

<?php
    $resultset = $connection->query("SELECT * from tblpublishgame");

    if(isset($_SESSION['currentUser'])){
        $currentUser = $_SESSION['currentUser'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <link href="./css/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<style>
    table, th {
        border: 1px solid black;
    }
</style>

<body>
    <div id="gameAlreadyBoughtAlert" class="p-5 bg-red-500 text-base text-white fixed top-4 hidden">
        <span id="closeAlert" class="ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black">&times;</span> 
        <strong>You have already bought the game.</strong> Unable to purchase again.
    </div>

    <div id="gameBoughtAlert" class="p-5 bg-green-500 text-base text-white fixed top-4 hidden">
        <span id="closeAlert2" class="ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black">&times;</span> 
        <strong>Game bought</strong> Transaction completed.
    </div>

    <div style='background-color:#ffff00'>
        <center><p style="color:white"><h5>List of Games Published</h5></p></center>
    </div>
    
    <h2>Logged in as <?php echo $currentUser?></h2>
    <h2>Dashboard</h2>
    <table style="width:100%">
        <tr>
            <th>Seq Number</th>
            <th>Name of Game</th>
            <th>Description</th>
            <th>Price</th>
            <th>Developer</th>
            <th>Publisher</th>
        </tr>
        <?php while ($row = $resultset->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['gameID'] ?></th>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['description'] ?></th>
                <th><?php echo $row['price'] ?></th>
                <th><?php echo $row['developer'] ?></th>
                <th><?php echo $row['publisher'] ?></th>
                <th><button onclick="buyGame(<?php echo $row['gameID']?>, <?php echo "'" . $currentUser . "'"; ?>)">Buy Game</button></th>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="homepage.php"><span class="underline">Go back to homepage</span></a>
</body>

<script>
    //Alert handling
    $(document).ready(function(){
        $("#closeAlert2").click(function(){
            $("#gameBoughtAlert").fadeOut(100);
        });
        $("#closeAlert").click(function(){
            $("#gameAlreadyBoughtAlert").fadeOut(100);
        });
    });
    function buyGame(code, user){
        $.post("api/buyGameBackend.php", 
            {
                gameCode: code,
                currentUser: user
            },
            function(data,status){
                data = JSON.stringify(data);
                data = JSON.parse(data);
                console.log("Data: " + JSON.stringify(data) + "\nStatus: " + JSON.stringify(status));
                if(data.transactionStatus == "bought"){
                    $("#gameBoughtAlert").fadeIn();
                    const timeout = setTimeout(fadeDelay, 3000);
                }else{
                    $("#gameAlreadyBoughtAlert").fadeIn();
                    const timeout2 = setTimeout(fadeDelay2, 3000);          
                }
            }
        );

        function fadeDelay(){
            $("#gameBoughtAlert").fadeOut(400);
        }

        function fadeDelay2(){
            $("#gameAlreadyBoughtAlert").fadeOut(400);
        }
    }
</script>
</html>

