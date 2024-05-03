<?php
include 'connect.php';

// Check if gameid is set and is a valid integer
if(isset($_GET['gameid']) && filter_var($_GET['gameid'], FILTER_VALIDATE_INT)) {
    $gameId = $_GET['gameid'];

    // Fetch game details from the database
    $result = $connection->query("SELECT * FROM tblpublishgame WHERE gameid = $gameId");
    if($result && $result->num_rows > 0) {
        $game = $result->fetch_assoc();
    } else {
        echo "Game not found";
        exit();
    }
} else {
    echo "Invalid game ID";
    exit();
}

// Check if form is submitted for updating game details
if(isset($_POST['btnUpdate'])) {
    $nameofgame = $_POST['nameofgame'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $developer = $_POST['developer'];
    $publisher = $_POST['publisher'];

    // Update record in the database
    $sql = "UPDATE tblpublishgame SET nameofgame='$nameofgame', description='$description', price='$price', developer='$developer', publisher='$publisher' WHERE gameid='$gameId'";
    if (mysqli_query($connection, $sql)) {
        echo "Record updated successfully";
        // Redirect back to dashboard
        header("Location: dashboard2.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

// delete game function
function deleteGame($connection, $gameId) {
    $sql = "DELETE FROM tblpublishgame WHERE gameid='$gameId'";
    if (mysqli_query($connection, $sql)) {
        echo "Record deleted successfully";
        // Redirect back to dashboard 
        header("Location: dashboard2.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}

// Check if the "Delete" button is clicked
if(isset($_POST['btnDelete'])) {
    deleteGame($connection, $gameId);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game</title>
</head>
<body>
    <h1>Edit Game</h1>
    <form method="post">
        <input type="hidden" name="gameid" value="<?php echo $gameId; ?>">
        <label for="nameofgame">Name of Game:</label><br>
        <input type="text" id="nameofgame" name="nameofgame" value="<?php echo $game['nameofgame']; ?>"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description" value="<?php echo $game['description']; ?>"><br>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="<?php echo $game['price']; ?>"><br>
        <label for="developer">Developer:</label><br>
        <input type="text" id="developer" name="developer" value="<?php echo $game['developer']; ?>"><br>
        <label for="publisher">Publisher:</label><br>
        <input type="text" id="publisher" name="publisher" value="<?php echo $game['publisher']; ?>"><br><br>
        <button type="submit" name="btnUpdate">Update</button>
        <button type="submit" name="btnDelete" onclick="return confirm('Are you sure you want to delete this game?')">Delete</button>
    </form>
</body>
</html>
