<?php
    include 'connect.php';
    //on top of html to prevent errors

    if(isset($_POST['btnRegister'])){	
        $uname=$_POST['regUserName'];
        $fname=$_POST['regFirstName'];		
        $lname=$_POST['regLastName'];
        $gender=$_POST['regGender'];
        $birthday=$_POST['regBirthday'];
        $email=$_POST['regEmail'];		
        $pword=$_POST['regPassword'];
        
        $sql2 ="Select * from tbluseraccount where username='".$uname."'";
        $result = mysqli_query($connection,$sql2);
        $row = mysqli_num_rows($result);

        if($row == 0){
            //If username not yet in use
            $hash_pass = password_hash($pword, PASSWORD_DEFAULT);
            $sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$hash_pass."')";
            mysqli_query($connection,$sql);

            $maybekey = mysqli_insert_id($connection);
            
            $sql1 ="Insert into tbluserprofile(firstname,lastname,gender,acctid, birthday) values('".$fname."','".$lname."','".$gender."', '".$maybekey."','".$birthday."')";
            mysqli_query($connection,$sql1);

            $_SESSION['entryStatus'] = 'reg';
            $_SESSION['hasNotifiedUser'] = false;
            $_SESSION['currentUser'] = $uname;
            

            header("Location: homepage.php");
            exit();
        }else{
            echo "<script>
                    $(\"#usernameExistsAlert\").fadeIn();

                    function fadeDelay(){
                        $(\"#usernameExistsAlert\").fadeOut(400);
                    }

                    const timeout = setTimeout(fadeDelay, 3000);

                    $(\"#closeAlert\").click(function(){
                        $(\"#usernameExistsAlert\").fadeOut(100);
                    });
                </script>";
        }
            
        
    }
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./css/register.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Register</title>
</head>
<body class="bg-registerPageBackground"> 
    <form method="post" class="font-poppins text-2xl flex flex-col items-center justify-center gap-5 my-6 mx-auto w-3/12 p-14 bg-indigo-950 bg-opacity-75">
        <div class="mb-10 text-4xl text-white font-bold">Create your account</div>
            <div class="relative z-0 w-full">
                <label for="regUserName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Username</label>
                <input type="text" name="regUserName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            
            <div class="relative z-0 w-full">
                <label for="regFirstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    First Name</label>
                <input type="text" name="regFirstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            
            <div class="relative z-0 w-full">
                <label for="regLastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Last Name</label>
                <input type="text" name="regLastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
                        
            <div class="relative z-0 w-full">
                <label for="regGender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Gender</label>
                    <select name="regGender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option selected>Select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
            </div>

            <div class="relative z-0 w-full">
                <label for="regBirthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Birthday</label>
                <input type="date" name="regBirthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
                        
            <div class="relative z-0 w-full">
                <label for="regEmail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email</label>
                <input type="text" name="regEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="relative z-0 w-full">
                <label for="regPassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password</label>
                <input type="password" name="regPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <button type="submit" name="btnRegister" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full w-full mt-7">Sign Up</button>  
            <div class="text-white text-sm">Already have an account? <a href="login.php"><span class="underline">Login</span></a></div>
    
            <div id="usernameExistsAlert" class="p-5 bg-red-500 text-base text-white fixed top-4 hidden">
                <span id="closeAlert" class="ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black">&times;</span> 
                <strong>Username already exists!</strong> Try another username.
            </div>

            <div id="registerSuccessAlert" class="p-5 bg-green-500 text-base text-white fixed top-4 hidden">
                <span id="closeAlert2" class="ml-4 text-white font-bold float-right text-xl leading-5 cursor-pointer transition-colors hover:text-black">&times;</span> 
                <strong>Successfully registered!</strong> You can now try logging in.
            </div>
    </form>
</body>
</html>