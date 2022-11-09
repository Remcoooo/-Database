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
    <div class="leftbanner">
        <div>
            <img class="logoimage" src="/images/logo_white.png" alt="Logo">
            <h2 class="lefttext">Welcome, <br><?php echo $_GET['name']; ?></h2>
        </div>
    </div>

    <div class="centerbanner">
        <img class="centerbanner image"src="/images/backstage.jpg" alt="Backstage Image">
        <div class="centertext">
            <p>Hello, thank you for the fun lessions of backstage :)<br>
                Really appreciate these lessions,<br>
                and ofcourse you teach them in a really nice way! </p>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div>
            <h2 class="socials">Socials</h2>
            <div class="icon-bar">
                <h1> 
                    <a href="https://www.facebook.com/remco.michels.1" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/SjefkeMichels" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/remco.michels/" class="instagram"><i class="fa fa-instagram"></i></a>
                </h1>
            </div>
        </div>
    </div>

    <div class="rightbanner">
    </div>
</body>
</html>