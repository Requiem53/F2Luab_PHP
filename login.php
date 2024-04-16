<?php
    include 'connect.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Login</title>
</head>
<body class="bg-registerPageBackground"> 
    <form method="post" class="font-poppins text-2xl flex flex-col items-center justify-center my-10 gap-7 mx-auto w-3/12 p-14 bg-neutral-50 bg-opacity-15">   
        <div class="mb-10 text-4xl text-white font-bold">Login to your account</div>
            <div class="relative z-0 w-full">
                <input type="text" name="logUserName" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                    Username</label>
            </div>
            <div class="relative z-0 w-full">
                <input type="password" name="logPassword" class="block py-2.5 px-0 w-full text-xl text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="floating_standard" class="w-full absolute text-lg text-gray-200 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                    Password</label>
            </div>

            <button type="submit" name="btnLogin" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">Login</button>  
            <div class="text-white text-sm">Don't have an account yet? <a href="register.php"><span class="underline">Register</span></a></div>
            
            <div id="incorrectPassAlert" class="p-5 bg-red-500 text-base text-white fixed top-4 hidden">
                <span id="closeAlert" class="ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black">&times;</span> 
                <strong>Incorrect password!</strong> Please try again.
            </div>
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST['btnLogin'])){	
        $uname=$_POST['logUserName'];
        $pword=$_POST['logPassword'];
        
        $usernames ="Select * from tbluseraccount where username='".$uname."'";
        $result = mysqli_query($connection,$usernames);
        $row = mysqli_num_rows($result);
        $user_data = mysqli_fetch_array($result);
        //3 - password column
        $hashed_password = $user_data[3];

        if($row == 0){
            //Condition when user does not exist
        }else if(password_verify($pword, $hashed_password)){
            $_SESSION['entryStatus'] = 'log ' . $uname;
            $_SESSION['hasNotifiedUser'] = false;
            header("Location: homepage.php");
            exit();
        }else{
            //fix wrong pass later
            echo "<script>
                $(\"#incorrectPassAlert\").fadeIn();

                function fadeDelay(){
                    $(\"#incorrectPassAlert\").fadeOut(400);
                }

                const timeout = setTimeout(fadeDelay, 3000);

                $(\"#closeAlert\").click(function(){
                    $(\"#incorrectPassAlert\").fadeOut(100);
                });
            </script>";
        }
    }
?>