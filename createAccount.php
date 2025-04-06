<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($email) && !empty($password)){
            //save to database
            $user_id= random_num(20);
            $query = "INSERT INTO users (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
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
    <title>Create Account</title>
</head>
<body>
    <nav>
        <a href="index.php"> Back to Shop</a>
    </nav>

    <form id="create-account-form" method="post">
        <p>
            <fieldset>
                <legend>Create Account</legend>
                
                <label>First name</label>
                <input type="text" name="firstname" id="firstname" required>
                </p>

                <label>Last name</label>
                <input type="text" name="lastname" id="lastname" required>
                </p>

                <label>Email</label>
                <input type="email" name="email" id="email" required>
                </p>

                <label>Phone Number</label>
                <input type="tel" name="phone" id="phone" required>
                </p>

                <label>Password</label>
                <input type="password" name="password" id="password" required>
            </fieldset>

            <input type="submit" value="Create Account">
            <input type="reset" value="Reset">
            <a href="login.php">click to login</a>

        </p>
    </form>

    <script src="script.js"></script>
</body>
</html>
