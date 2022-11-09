<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Backstage</title>
</head>

<body>
    <div class="container">
        <div class="login-wrapper">
            <img class="image" src="/images/logo_blue.png" alt="Logo">
            <h2>Login to see how our <br> page is doing</h2>
            <p class="undertitle">Join our webpage now!</p>

            <?php
                if (isset($_GET['register']))
                {
                    if ($_GET['register'] == 'succes');
                    {
                        ?>
                            <div class="message succes">
                                <p>Account succesfully created, <br> You can now login!</p>
                            </div>
                       
                       <?php
                    }
                }
            ?>

            <form action="login_handler.php" method="POST" class="login_form">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email"><br>

                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password"><br>

                <?php
                if (isset($_GET['error']))
                {
                    $error = $_GET['error'];

                    if($error == 'wrong_credentials');
                    {
                        ?>
                            <div class="message error">
                                <p>Wrong username or password, <br> Please try again</p>
                            </div>
                        <?php
                    }
                }
                ?>

                <input type="submit" value="Login">

                <p class="login_link">Do you not have an account yet? <br> Click here to <a href="index.php">Sign-up</a></p>
            </form>
        </div>
    </div>
    <div>
        <img class="bg-image"src="/images/blue4.jpg" alt="Background Image">
        <img class="bg-logo" src="/images/logo_black.png" alt="Background Logo">
    </div>
    <div class="underline">
        <div class="centered"> Hi, my name is Remco Michels and i'm 19 years old. I really like to build website's. <br> Click here to see <a href="https://policies.google.com/">Terms & Privacy</a></div>
    </div>
</body>
</html>