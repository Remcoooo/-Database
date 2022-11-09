<?php

    if (isset($_POST['email']) && isset($_POST['password'])) {

        // Load database connection
        require 'db_connection.php';

        // Save variables
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if email exists
        $prepared = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");

        $prepared->execute([
            'email' => $email,
            'password' => sha1($password)
        ]);

        $results = $prepared->fetchAll(PDO::FETCH_ASSOC);

        $name = $results[0]['name'];

        if (empty($results))
        {
            header( "location: /backstage/login_form.php?error=wrong_credentials" );
        }
        else
        {
            header( "location: /backstage/logged_in.php?name=" . $name );
        } 
    }
    else
    {
        header( "location: /backstage/login_form.php" );
    }
?>