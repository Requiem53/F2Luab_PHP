<?php

    $title = 'Dashboard';
?>

<div style='background-color:#ffff00'>

</div> <center><p style="color:white"><h5>List of Games Published</h5></p></center>

<div>
    <?php

        $mysqli = new mysqli('localhost', 'root','', 'dbkisteriaf2') or die (mysqli_error($mysqli));
        $resultset = $mysqli->query("SELECT * from tblpublishgame") or die ($mysqli->error);

    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    table, th {
        border: 1px solid black;
    }
</style>
<body>
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
        </tr>
    <?php endwhile; ?>
</table>
 
</body>
</html>




<!-- <table id="tblpublishgame " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Seq Number<th>
                <th>Name of Game<th>
                <th>Description<th>
                <th>Price<th>
                <th>Developer<th>
                <th>Publisher<th>
            </tr>
        </thead>
        <tbody>    
            <?php 
                while($row = $resultset->fetch_assoc()):
            ?>
            <tr>
                <th><?php echo $row['gameID'] ?></th>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['description'] ?></th>
                <th><?php echo $row['price'] ?></th>
                <th><?php echo $row['developer'] ?></th>
                <th><?php echo $row['publisher'] ?></th>
                <th>
                    <a href="">VIEW</a>
                    <a href="">DELETE</a>
                </th>
            </tr>      
            <?php endwhile;?>
        </tbody>
    </table>

    -->
