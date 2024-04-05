<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>Search a user</p>
        <input type="text" name="searchUser">
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
            echo $user_data[$i][2];
            echo "<br>";
        }
    }
?>