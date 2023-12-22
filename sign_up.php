<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="D:\NDT\Semester 02 year 01\Web Technology\CA2\CA2\signup.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .register {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(bckgrnd.jpeg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register h1 {
            color: #ff7300;
            font-size: 80px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .register form {
            width: 50%;
            background: #ffffff86;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .inputBox {
            position: relative;
            width: 100%;
            margin-bottom: 2rem;
        }

        .inputBox input {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            color: #fff;
            letter-spacing: 1px;
            border: none;
            border-bottom: 2px solid #ff7300;
            outline: none;
            background: transparent;
        }

        .inputBox label {
            margin: 2px;
            padding: 2px;
            padding-top: 2px;
            color: #000000;
        }

        input[type="submit"] {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #ff7300;
            padding: 0.8rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #ff5100;
        }

        .inputBox button {
            position: absolute;
            right: 0;
            top: 0;
            padding: 0.5rem 0.8rem;
            font-size: 1rem;
            outline: none;
            border: none;
            background: transparent;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .inputBox button:hover {
            background: #ff5100;
        }

        .home {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }

        .home a {
            text-decoration: none;
            color: #fff;
            background: #ff7300;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
        }

        .home a:hover {
            background: #ff5100;
        }

        @media (max-width: 700px) {
            .register {
                flex-direction: column;
            }

            .register h1 {
                font-size: 50px;
            }

            .register form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="register">
        <h1>Sign Up</h1>
        <form action="add.php" method="post">
            <div class="inputBox">
                <label for="name"></label>Name:</label>
                <input type="text" name="name" placeholder="Enter Name" required="required" /><br>
                <label for="Username">Username:</label>
                <input type="text" name="username" placeholder="User Name" required="required" /><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required="required" /><br>
                <label for="email"> Email </label>
                <input type="text" name="email" placeholder="example@email.com" required="required" /><br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" placeholder="Phone" required="required" /><br>
                <button class="btn btn-primary btn-block btn-large">Sign Up</button>
            </div>
        </form>

        <div class="home">
            <a href="http://localhost/ah-dishes/ah_dishes/index.php">Home</a>
        </div>
    </div>
</body>

</html>