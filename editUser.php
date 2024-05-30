<?php
include 'connect.php';

//If not logged in, go back to index
if(!isset($_SESSION['currentUser'])){
    header("Location: index.php");
}else{
    $currentUser = $_SESSION['currentUser'];
}
// Check if gameid is set and is a valid integer
if(isset($_GET['userID']) && filter_var($_GET['userID'], FILTER_VALIDATE_INT)) {
    $result = $connection->query("SELECT acctid FROM tblUserAccount WHERE username = '$currentUser'");
    $currUserID0 = $result->fetch_assoc();
    $currUserID = $currUserID0['acctid'];
    $userID = $_GET['userID'];
    if(strcmp($userID, $currUserID) != 0){
        // header("Location: homepage.php");
        echo $userID;
        echo $currUserID;
    }

    // Fetch game details from the database
    $result1 = $connection->query("SELECT * FROM tblUserProfile WHERE acctid = $userID");
    if($result1 && $result1->num_rows > 0) {
        $userProfile = $result1->fetch_assoc();
    } else {
        echo "User not found";
        exit(); 
    }

    $result2 = $connection->query("SELECT * FROM tblUserAccount WHERE acctid = $userID");
    if($result2 && $result2->num_rows > 0) {
        $userAccount = $result2->fetch_assoc();
    } else {
        echo "User not found";
        exit(); 
    }
} else {
    echo "Invalid user ID";
    exit();
}

// Check if form is submitted for updating game details
if(isset($_POST['btnUpdate'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    // Update record in the database
    $sql1 = "UPDATE tbluseraccount SET username=?, password=? WHERE acctid=?";
    $sql2 = "UPDATE tbluserprofile SET firstname=?, lastname=?, gender=?, description=? WHERE acctid=?";

    $stmt1 = $connection->prepare($sql1);
    $stmt2 = $connection->prepare($sql2);

    if ($stmt1) {
        $stmt1->bind_param("ssi", $username, $hashed_pass, $userID);
         $_SESSION['currentUser'] = $username;
        if (!$stmt1->execute()) {
            echo "Error updating record: " . $stmt1->error;
        }
        $stmt1->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }
    
    if ($stmt2) {
        $stmt2->bind_param("ssssi", $firstname, $lastname, $gender, $description, $userID);
        if (!$stmt2->execute()) {
             echo "Error updating record: " . $stmt2->error;
        }
        $stmt2->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }

    header("Location: userProfile.php?userID=$currentUser");
}

// delete game function
function deleteGame($connection, $gameId) {
    $sql = "DELETE FROM tbluseraccount WHERE acctid='$gameId'";
    $sql2 = "DELETE FROM tbluserprofile WHERE acctid='$gameId'";
    if (mysqli_query($connection, $sql) && mysqli_query($connection, $sql2)) {
        echo "Record deleted successfully";
        // Redirect back to dashboard 
        header("Location: homepage.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}

// Check if the "Delete" button is clicked
if(isset($_POST['btnDelete'])) {
    deleteGame($connection, $userID);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile</title>
</head>
<body>
    <h1>Edit User Profile</h1>
    <form method="post">
        <input type="hidden" name="userid" value="<?php echo $userID; ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $userAccount['username']; ?>"><br>
        <label for="password">New Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" value="<?php echo $userProfile['firstname']; ?>"><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" value="<?php echo $userProfile['lastname']; ?>"><br><br>
        <label for="gender">Gender:</label><br>
        <input type="text" id="gender" name="gender" value="<?php echo $userProfile['gender']; ?>"><br><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description" value="<?php echo $userProfile['description']; ?>"><br>
        <button type="submit" name="btnUpdate">Update</button>
        <button type="submit" name="btnDelete" onclick="return confirm('Are you sure you want to delete your account?')">Delete</button>
    </form>
</body>
</html>
