<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="ah_dishes\style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AH Dishes</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="http://localhost/ah-dishes/ah_dishes/index.php">HOME</a></li>
                    <li><a href="#">Offers</a></li>
                    <li><a href="http://localhost/ah-dishes/ah_dishes/about_us.html">About Us</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>AH Dishes <br><span>Resturent</span> <br>Click & Taste</h1>
            <p class="par">Come for the food, stay for the memories - AH Dishes, 
                 <br> where every meal is a celebration of family and flavor.</p>

                <button class="cn"><a href="ah_dishes/visit.html">JOIN US</a></button>

                <div class="form">
                    <form action="login_user.php" method="post">
                    <h2>Login Here</h2>
                    <input type="email" id="email" name="email" placeholder="Enter Email Here">
                    <input type="password" id="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn"><a href="#">Login</a></button>
                    </form>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>