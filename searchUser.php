<?php
    include 'connect.php';
    session_start();

    if(!isset($_SESSION['entryStatus'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/searchUser.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-black">
    <form method="post" class="text-white">
        <p>Search a user</p>
        <input type="text" name="searchUser" class="text-black">
        <button type="submit" name="btnSearch">Search</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['btnSearch'])){	
        $searchUser = $_POST['searchUser'];
        $usernames ="SELECT * FROM tbluseraccount WHERE username LIKE '".$searchUser."%' ";
        $result = mysqli_query($connection,$usernames);
        $user_data = mysqli_fetch_all($result);
        $row = $row = mysqli_num_rows($result);

        for($i = 0; $i < $row; $i++){
            echo "<p class=\"text-white\">";
            //0 - userid
            //3 - Username
            echo $user_data[$i][2];
            echo "<br>";

            $accountKey = $user_data[$i][0];
            $userProfile = "SELECT * FROM tbluserprofile WHERE acctid='".$accountKey."' ";
            $result = mysqli_query($connection,$userProfile);
            $user_profile = mysqli_fetch_all($result);  
            $row2 = count($user_profile[0]);

            echo $user_profile[0][1];
            echo "<br>";
            echo $user_profile[0][2];
            echo "<br>";
            echo $user_profile[0][3];
            echo "<br>";
            echo $user_profile[0][5];

            // echo var_dump($user_data[$i]);
            echo "<br>";
            echo "<br>";
            
            echo "</p>";
        }
    }
?>