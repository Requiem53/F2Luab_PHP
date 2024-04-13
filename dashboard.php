<?php
    $title = 'Dashboard';
?>

<?php
    $mysqli = new mysqli('localhost', 'root','', 'dbluabf2') or die (mysqli_error($mysqli));
    $resultset = $mysqli->query("SELECT * from tblpublishgame") or die ($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Dashboard</title>
</head>

<style>
    table, th {
        border: 1px solid black;
    }
</style>

<body>
    <div style='background-color:#ffff00'>
        <center><p style="color:white"><h5>List of Games Published</h5></p></center>
    </div>
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
                <th><?php echo $row['publisher'] ?></th>4
                <th><button onclick="buyGame(<?php echo $row['gameID'] ?>)">Buy Game</button></th>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="homepage.php"><span class="underline">Go back to homepage</span></a>
</body>
<script>
    function buyGame(code){
        console.log(code);
        $.post("buyGameBackend.php", 
            {
                gameCode: code
            },
            function(data,status){
                data = JSON.parse(data);
                console.log("Data: " + JSON.stringify(data.message) + "\nStatus: " + JSON.stringify(status));
            }
        );
    }
</script>
</html>

