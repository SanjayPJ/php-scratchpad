<?php

    class Person{
        // public $name;
        // public $email;

        private $name;
        private $email;
        public static $age_limit = 34;
        private static $age_limit_private = 34;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }
        public function __destruct(){
            echo __CLASS__ . "distroyed\n";
        }
        public function get_name(){
            return $this->name;
        }
        public function get_email(){
            return $this->email;
        }
        public function set_name($name){
            $this->name = $name;
        }
        public function set_email($email){
            $this->email = $email;
        }
        public function get_age_limit(){
            return self::$age_limit;
        }
    }

    echo Person::$age_limit . "\n";
    echo Person::get_age_limit() . "\n";

    
    // $person1 = new Person;
    $person2 = new Person("Athulya", "araj@gmail.com");
    
    // $person1->name = 'John Doe';

    // echo $person1->name;

    // $person1->set_name("Sanjay PJ");
    // $person1->set_email("sanjaypjayan2000@gmail.com");

    // echo $person1->get_name() . "\n";
    // echo $person1->get_email() . "\n";

    echo $person2->get_name() . "\n";
    echo $person2->get_email() . "\n";

    class Customer extends Person{
        private $balance;

        public function ___construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
        }
        public function get_balance(){
            return $this->balance;
        }
    }

    $customer1 = new Customer('Sanjay M', 'sam###@hh.com', 9000);

    echo $customer1->get_name() . "\n";
    echo $customer1->get_email() . "\n";
    echo $customer1->get_balance() . "\n";
?>