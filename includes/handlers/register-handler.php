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

    function 

    if(isset($_POST['loginButton'])) {
        //login button was pressed
    }
    if(isset($_POST['registerButton'])) {
        //register button was pressed
        $username = sanitizeFormUsername($_POST['username']);
        $email = sanitizeFormEmail($_POST['email']);
        $email2 = sanitizeFormEmail($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password']);


    }
?>