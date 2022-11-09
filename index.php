<!DOCTYPE html>
<html class="html"lang="en">
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
            <h2>Sign-up to see what's <br> going on in the world</h2>
            <p class="undertitle">Join our webpage now!</p>

            <form action="register_handler.php" method="POST" class="login_form">
                <label for="name"></label>
                <input type="name" id="name" name="name" placeholder="Name"><br>
                <?php
                if (isset($_GET['name']))
                {
                    $name = $_GET['name'];

                    if($name == 'namexists');
                    {
                        ?>
                            <div class="message namecheck">
                                <p>Name already exists.</p>
                            </div>
                        <?php
                    }
                }
                ?>

                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email"><br>
                
                <?php
                if (isset($_GET['email']))
                {
                    $email = $_GET['email'];

                    if($email == 'emailexists');
                    {
                        ?>
                            <div class="message emailcheck">
                                <p>Email already exists.</p>
                            </div>
                        <?php
                    }
                }
                ?>
                
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password"><br>

                <label for="confim_password"></label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Repeat Password"><br>
                <?php
                if (isset($_GET['error']))
                {
                    $error = $_GET['error'];

                    if($error == 'confirm_password_err');
                    {
                        ?>
                            <div class="message confirmpsw">
                                <p>Please confirm password.</p>
                            </div>
                        <?php
                    }
                }
                ?>
                <?php
                if (isset($_GET['notmatch']))
                {
                    $notmatch = $_GET['notmatch'];

                    if($notmatch == 'not_matched');
                    {
                        ?>
                            <div class="message matchpsw">
                                <p>Password did not match.</p>
                            </div>
                        <?php
                    }
                }
                ?>
                
                <input type="submit" value="Login">

                <p class="login_link">Do you already have an account? <br> Click here to <a href="login_form.php">Login</a></p>
            </form>
        </div>
    </div>
    <div>
        <img class="bg-image"src="/images/blue4.jpg" alt="Background Image">
        <img class="bg-logo" src="/images/logo_black.png" alt="Background Logo">
    </div>
    <div class="underline">
        <div class="centered"> Hi, my name is Remco Michels and i'm 20 years old. I really like to build website's. <br> Click here to see <a href="https://policies.google.com/">Terms & Privacy</a></div>
    </div>
</body>
</html>