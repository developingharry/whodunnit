<?php
    function sanitizeFormUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormEmail($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    if(isset($_POST['registerButton'])) {
        //register button was pressed
        $username = sanitizeFormUsername($_POST['username']);
        $email = sanitizeFormEmail($_POST['email']);
        $email2 = sanitizeFormEmail($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password2']);

        $wasSuccessful = $account->register($username,$email,$email2,$password,$password2);

        if($wasSuccessful){
            $_SESSION['userLoggedIn'] = $username;
            header("Location: index.php");
        }
    }
?>