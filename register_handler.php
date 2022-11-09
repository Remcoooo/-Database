<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']))
    {
        // load database
        require 'db_connection.php';

        // set variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_err = $confirm_password_err = "";
        $name_err = "";
        $email_err = "";
        
        if(empty(trim($_POST["confirm_password"])))
        {
            $confirm_password_err = "Please confirm password.";
            header("location: /backstage/index.php?error=confirm_password_err");
        } 
        else
        {
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password))
            {
                $confirm_password_err = "Password did not match.";
                header("location: /backstage/index.php?notmatch=not_matched");
            }
        }

        if (empty($name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err))
        {
            
            $hashed_password = sha1($password);

            // insert new user to database
            $stmt = $conn->prepare("INSERT INTO users (name, email, password)
                                    VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);

            // insert row
            $stmt->execute();

            header("location: /backstage/login_form.php?register=succes");
        }
    }
    else
    {
        header("location: /backstage");
    }
?>