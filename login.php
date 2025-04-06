<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($email) && !empty($password)){
            //read from database
            $query = "select * from users where email='$email' limit 1";
            $result = mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                $user_data = mysqli_fetch_assoc($result);

                {
                if($user_data['password']===$password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['email']=$user_data['email'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "wrong email/password";
           
        }else{
            echo "enter something valid bruh";
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <nav>
        <a href="index.php">Back to Shop</a>
    </nav>

    <form id="create-account-form" method="post">
        <p>
            <fieldset>
                <legend>Login</legend>
               

                <label>Email</label>
                <input type="email" name="email" id="email" required>
                </p>

                <label>Password</label>
                <input type="password" name="password" id="password" required>
            </fieldset>

            <input type="submit" value="Login">
            <input type="reset" value="Reset">
            <a href="createAccount.php">click to sign up</a>
        </p>
    </form>

    <script src="script.js"></script>
</body>
</html>