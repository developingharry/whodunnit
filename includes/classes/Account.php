<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray=array();
        }

        public function register($un,$em,$em2,$pw,$pw2) {
            $this->validateUsername($un);
            $this->validateEmails($em,$em2);
            $this->validatePasswords($pw,$pw2);

            if(empty($this->errorArray)) {
                //insert into db
                return true;
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
            
        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 4) {
                array_push($this->errorArray, "Your username must be between 4 and 25 characters");
                return;
            }

            //TODO - check if username exists
        }
    
        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, "Your emails don't match");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is invalid");
                return;
            }

            //TODO - check if email exists
        }
    
        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2) {
                array_push($this->errorArray, "Your passwords don't match");
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/',$pw)) {
                array_push($this->errorArray, "Your passwords can only contain numbers and letters");
                return;
            }

            if(strlen($pw) > 40 || strlen($pw) < 6) {
                array_push($this->errorArray, "Your password must be between 6 and 40 characters");
                return;
            }

        }

    }
?>