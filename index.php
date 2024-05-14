<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" href="img/profile.png">
    <title>Apple</title>
</head>
<body>
    <?php
        if(isset($_GET["error"]))
        { $msg = $_GET["error"]; ?>
        <div id="error">
            <div class="errorContainer">
                <i class="fa-solid fa-triangle-exclamation fa-5x" style="color: #ff0000;"></i>
                <p><?php echo $msg; ?></p>
                <button onclick="document.getElementById('error').style.display='none';">Close</button>
            </div>
        </div>
    <?php
        }
        if(isset($_GET["msg"]))
        {
            $msg = $_GET["msg"]; ?>
            <div id="msg">
                <div class="msgContainer">
                    <p><?php echo $msg; ?></p>
                    <button onclick="document.getElementById('msg').style.display='none';">Close</button>
                </div>
            </div>
    <?php    }
    ?>
    <div class="header">
        <i class="fa-solid fa-bars fa-xl" onclick="document.getElementById('menu').style.display ='flex';" style="color: #ffffff;"></i>
        <h1>Siklab</h1>
        <ul id="menu">
            <li class="icon"><a onclick="document.getElementById('menu').style.display ='none';"><i class="fa-solid fa-xmark fa-xl" style="color: #ffffff;"></i></a></li>
            <li><a href="#home" class="link">Home</a></li>
            <li><a <?php  if(isset($_SESSION["userName"])){echo 'href="#product"';} else{echo "onclick='login()'";} ?> class="link">Product</a></li>
            <li><a <?php  if(isset($_SESSION["userName"])){echo 'href="#about"';} else{echo "onclick='login()'";} ?> class="link">About</a></li>
        </ul>
        <?php
        if (isset($_SESSION["userName"]))   
        {
            echo "<div class='logout'><p>".$_SESSION["userName"]."</p>"."<p>|</p>"."<a id='loginBtn' href='php/logOut.php'>Logout</a></div>";
        }
        else
        {
            echo "<a id='loginBtn' href='#' onclick='login()'>Login</a>";
        }
        ?>
    </div>
    <div id="loginForm">
        <form id="loginContainer" action="php/login.php" method="post">
            <i class="fa-solid fa-xmark fa-sm" id="closeLogin" onclick="closeLogin()" style="color: #909d9d;"></i>
            <h1>Login</h1>
            <div class="input">
                <i class="fa-solid fa-envelope" style="color: #909d9d;"></i>
                <input type="email" name="username" placeholder="Enter your Email" required>
            </div>
            <div class="input pass">
                <div>
                    <i class="fa-solid fa-lock" style="color: #909d9d;"></i>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                </div>
                <div>
                    <i class="fa-solid fa-eye-slash" id="seePass" name="seePass" onclick="seePass('seePass', 'password'); " style="color: #909d9d;"></i>
                </div>
            </div>
            <div class="pass">
                <div>
                    <input type="checkbox" required>
                    <span>Remember me?</span>
                </div>
                <a href="#">Forgot password?</a>
            </div>
            <input type="submit" value="Login Now" name="login" id="submit">
            <div class="account">
                <p>Already have an account?</p>
                <a onclick="signUp();" href="#">Sign Up</a>
            </div>
        </form>
    </div>
    <div id="signUpForm">
        <form id="signUpContainer" action="php/signUp.php" method="post">
            <i class="fa-solid fa-xmark fa-sm" id="closeSignUp" onclick="closeSignUp()" style="color: #909d9d;"></i>
            <h1>Sign Up</h1>
            <div class="input">
                <i class="fa-solid fa-envelope" style="color: #909d9d;"></i>
                <input type="email" name="userName" placeholder="Enter your email" required>
            </div>
            <div class="input pass">
                <div>
                    <i class="fa-solid fa-lock" style="color: #909d9d;"></i>
                    <input type="password" id="signPass" name="password" placeholder="Enter your password" required>
                </div>
                <div>
                    <i class="fa-solid fa-eye-slash" id="seeSignPass" onclick="seePass('seeSignPass', 'signPass');" style="color: #909d9d;"></i>
                </div>
            </div>
            <div class="input pass">
                <div>
                    <i class="fa-solid fa-lock" style="color: #909d9d;"></i>
                    <input type="password"  id="confirmPass" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <div>
                    <i class="fa-solid fa-eye-slash" id="seeConfirmPass" onclick="seePass('seeConfirmPass', 'confirmPass');" style="color: #909d9d;"></i>
                </div>
            </div>
            <input type="submit" name="submit" value="Sign Up" id="submit">
            <div class="account">
                <p>Already have an account?</p>
                <a onclick="loginAgain();" href="#">Login</a>
            </div>
        </form>
    </div>
    <div class="content">
        <section id="home">
            <div>
                <h1>Welcome</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis quis magna vel malesuada. Duis nisl ligula, pulvinar nec orci id, consectetur accumsan libero. Etiam vel orci purus. Phasellus tempus lectus at lorem ultricies, at sagittis odio feugiat. Aenean fermentum id nisi a pharetra. Vestibulum vel libero bibendum, blandit mauris non, tincidunt metus. Proin tristique sit amet arcu a ornare.

Nulla lobortis fringilla tincidunt. Aenean a odio vitae augue condimentum elementum a vitae sapien. Praesent pellentesque velit nisi, in tincidunt odio venenatis id. Pellentesque mattis quam at tellus viverra cursus. Duis blandit dignissim massa, a sagittis quam gravida sed. Nulla sit amet venenatis risus. Suspendisse viverra enim sed neque sollicitudin, ut bibendum arcu sodales. Sed interdum ac arcu et mattis. Donec vehicula, dui eget scelerisque varius, orci massa consequat neque, ut maximus nisl nulla eu turpis. Nunc sit amet lorem mauris. Etiam consequat metus non tempor luctus. Etiam nec tincidunt leo. Proin posuere non justo vitae finibus.

Integer enim odio, ornare ut felis vitae, molestie interdum dui. Nullam lorem magna, cursus non porttitor vel, malesuada egestas nunc. Nulla sollicitudin lacus in metus tincidunt, eget pellentesque felis sodales. Nulla facilisi. Nullam iaculis luctus orci eu dapibus. Etiam ut ipsum vel elit venenatis finibus. Cras urna nisi, ultrices nec erat in, molestie vulputate ex. Nulla facilisi.
                </p>
            </div>
            <h1 class="feature">Featured Products</h1>
        </section>
        
        <section id="product">
            <div class="phones" onclick="phone('phone');">
                <h1>iPhone 14 Pro & iPhone 14 Pro Max</h1>
                <img src="img/14ProMax.png">
            </div>
            <div class="phones" onclick="phone('phone1');">
                <h1>iPhone 14   & iPhone 14 Plus</h1>
                <img src="img/14Plus.png">
            </div>
            <div class="phones" onclick="phone('phone2');">
                <h1>iPhone 14   & iPhone 14 Plus</h1>
                <img src="img/14PlusColor.png">
            </div>

            <div class="phone" id="phone">
                <div class="phoneContainer">
                    <div class="info">
                        <img src="img/14ProMax.png">
                        <div>
                            <h1>iPhone 14 Pro & iPhone 14 Pro Max</h1>
                            <img src="img/specs14ProMax.png">
                        </div>
                    </div>
                    <div class="btn">
                        <p onclick="closePhone('phone');">Back </p>
                    </div>
                </div>
            </div>

            <div class="phone" id="phone1">
                <div class="phoneContainer">
                    <div class="info">
                        <img src="img/14Plus.png">
                        <div>
                            <h1>iPhone 14 & iPhone 14 Plus</h1>
                            <img src="img/specs14Plus.png">
                        </div>
                    </div>
                    <div class="btn">
                        <p onclick="closePhone('phone1');">Back </p>
                    </div>
                </div>
            </div>

            <div class="phone" id="phone2">
                <div class="phoneContainer">
                    <div class="info">
                        <img src="img/14PlusColor.png">
                        <div>
                            <h1>iPhone 14 & iPhone 14 Plus</h1>
                            <img src="img/specs14Plus.png">
                        </div>
                    </div>
                    <div class="btn">
                        <p onclick="closePhone('phone2');">Back </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="aboutContainer">
                <div class="left">
                    <p>Email: Siklaborg20@gmail.com</p>
                    <p>Contact: 09060162378</p>
                </div>
                <div class="right">
                    <h1>About Us</h1>
                    <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis quis magna vel malesuada. Duis nisl ligula, pulvinar nec orci id, consectetur accumsan libero. Etiam vel orci purus. Phasellus tempus lectus at lorem ultricies, at sagittis odio feugiat. Aenean fermentum id nisi a pharetra. Vestibulum vel libero bibendum, blandit mauris non, tincidunt metus. Proin tristique sit amet arcu a ornare.

Nulla lobortis fringilla tincidunt. Aenean a odio vitae augue condimentum elementum a vitae sapien. Praesent pellentesque velit nisi, in tincidunt odio venenatis id. Pellentesque mattis quam at tellus viverra cursus. Duis blandit dignissim massa, a sagittis quam gravida sed. Nulla sit amet venenatis risus. Suspendisse viverra enim sed neque sollicitudin, ut bibendum arcu sodales. Sed interdum ac arcu et mattis. Donec vehicula, dui eget scelerisque varius, orci massa consequat neque, ut maximus nisl nulla eu turpis. Nunc sit amet lorem mauris. Etiam consequat metus non tempor luctus. Etiam nec tincidunt leo. Proin posuere non justo vitae finibus.

Integer enim odio, ornare ut felis vitae, molestie interdum dui. Nullam lorem magna, cursus non porttitor vel, malesuada egestas nunc. Nulla sollicitudin lacus in metus tincidunt, eget pellentesque felis sodales. Nulla facilisi. Nullam iaculis luctus orci eu dapibus. Etiam ut ipsum vel elit venenatis finibus. Cras urna nisi, ultrices nec erat in, molestie vulputate ex. Nulla facilisi.
                    </p>
                </div>
            </div>
        </section>
    </div>
    <script src="index.js"></script>
</body>
</html>