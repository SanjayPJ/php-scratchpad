<?php
    //getters and setters
    class User{
        private $name = 'sanjay';
        private $age = 34;

        //__get magic method
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        //__set magic method
        public function __set($property, $value){
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
            return $this;
        }
    }

    $user1 = new User();

    echo $user1->__get('name') . "\n";
    echo $user1->__get('age') . "\n";

    $user1 = $user1->__set('age', 18);

    echo $user1->__get('age');
?>