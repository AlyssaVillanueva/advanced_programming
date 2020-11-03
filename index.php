<?php
    class User{

        public $name;
        public $username;
        public $email;

        function addFriend($name){
            echo $name. " added a friend.";
        }
        function postStatus($name){
            echo $name. " posted a friend.";
        }
    }
        $example = new User();
        echo $example->addFriend('Aly');
        echo "<br>";
        echo $example->postStatus('Aly');
?>