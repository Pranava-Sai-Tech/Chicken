<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    //SOMETHING WAS POSTED
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        $query="select * FROM users where user_name='$user_name' LIMIT 1";
 
        $result=mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data=mysqli_fetch_assoc($result);
                
                if($user_data['password']== $password)
                {
                    $_SESSION['user_id']=$user_data['user_id'];
                    header("Location:index.php");
                    die;
                }

            }

        }
        echo "wrong username or password";
    }
    else{
        echo "wrong username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

    <style>
        body {
        font-family: Arial, sans-serif;
        background-color:aliceblue;
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .container {
            background-color:#455fa08a;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 5px solid #0f0f0f;
            border-radius: 20px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 250px; 
            height: 30px; 
            padding: 10px;
            font-size: 16px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }
        button {
            width: 120px; /* Increase the width */
            height: 50px; /* Increase the height */
            padding: 10px 20px; /* Add padding for spacing inside the button */
            font-size: 20px; /* Increase the font size */
            background-color: #4CAF50; /* Set a background color (optional) */
            color: white; /* Set text color */
            border: 20px; /* Remove the border */
            border-radius: 10px; /* Add rounded corners */
            cursor: pointer; /* Add a pointer cursor on hover */
        }

        button:hover {
            background-color: #455fa08a; /* Darken the button on hover (optional) */
        }
        .signuptext{
            color:black;
            font-size:20px;
        }

    </style>

    <div class="container">  
        <form method="POST">
            <div style="font-size: 30px;margin: 20px;color:#0f0f0f;">Login</div> 

            <input id="text" type="text" name="user_name" placeholder=" username"><br><br>
            <input id="text" type="password" name="password" placeholder="password"><br><br>

            <button type="submit">Login</button><br><br>
            <a href="signup.php" class="signuptext">Click To Signup</a><br><br>
        </form>
    </div>
</body>
</html>