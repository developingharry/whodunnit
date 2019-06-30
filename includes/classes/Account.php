<?php
    class Account {

        private $conn;

        private $errorArray;

        public function __construct($conn) {
            $this->conn = $conn;
            $this->errorArray=array();
        }

        public function login($un,$pw) {
            $pw = md5($pw);
            $query = mysqli_query($this->conn, "SELECT * FROM detectives WHERE username = '$un' AND password='$pw'");
            if(mysqli_num_rows($query) == 1) {
                return true;
            } else {
                array_push($this->errorArray, Constants::$loginFailed);
                return false;
            }
        }

        public function register($un,$em,$em2,$pw,$pw2) {
            $this->validateUsername($un);
            $this->validateEmails($em,$em2);
            $this->validatePasswords($pw,$pw2);

            if(empty($this->errorArray)) {
                //insert into db
                return $this->insertUserDetails($un,$em,$pw);
            } else {
                return false;
            }
        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function insertUserDetails($un,$em,$pw) {
            $encryptedPw = md5($pw);
            $date = date("Y-m-d");
            $currentPick = "";
            $streak = "";

            $result = mysqli_query($this->conn, "INSERT INTO detectives VALUES ('','$un','$em','$encryptedPw','$date','$currentPick','$streak')");

            return $result;
        }
            
        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 4) {
                array_push($this->errorArray, Constants::$usernameCharacters);
                return;
            }

            $checkUsernameQuery = mysqli_query($this->conn, "SELECT username FROM detectives WHERE username='$un'");
            if(mysqli_num_rows($checkUsernameQuery) != 0) {
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }
        }
    
        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, Constants::$emailsDontMatch);
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            $checkEmailQuery = mysqli_query($this->conn, "SELECT email FROM detectives WHERE email='$em'");
            if(mysqli_num_rows($checkEmailQuery) != 0) {
                array_push($this->errorArray, Constants::$emailTaken);
                return;
            }
        }
    
        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2) {
                array_push($this->errorArray, Constants::$passwordsDontMatch);
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/',$pw)) {
                array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
                return;
            }

            if(strlen($pw) > 40 || strlen($pw) < 6) {
                array_push($this->errorArray, Constants::$passwordCharacters);
                return;
            }
        }
    }
?>