<?php
    class User{
        public $name;
        public $pass;
        public static $min_pass_length = 6;

        public static function check_pass($pass){
            if(strlen($pass) >= self::$min_pass_length){
                return true;
            }else{
                return false;
            }
        }
    }

    $password =  '123456';
    // if(User::check_pass($password)){
    //     echo "password is valid";
    // }else{
    //     echo "password is not valid";
    // }

    $user1 = new User();

    if($user1::check_pass($password)){
        echo "password is valid";
    }else{
        echo "password is not valid";
    }
?>