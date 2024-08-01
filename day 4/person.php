<?php

class Person{
    public $name;
    public $email='krischal@gmail.com';
    public $password='Nopassword';

    public function setEmailandPassword($email, $password){
        $this->email = $email;
        $this->password= $password;
    }

    public function getEmailandPassword(){

    }

    public function __construct($name){
        $this->name = $name;
    }
}
    $mem1 = new Person("krischal");
    $mem2 = new Person("nysa");
    $mem3 = new Person("saaron");

    echo $mem1->name.'<br>';
    echo $mem2->name.'<br>';
    echo $mem3->name.'<br>';



    // echo $mem1->email.'<br>';
    // echo $mem2->email.'<br>';
    // echo $mem3->email.'<br>';
        
    // echo $mem1->password.'<br>';
    // echo $mem2->password.'<br>';
    // echo $mem3->password.'<br>';

    // echo "<br/>";
    // echo $man->email .'<br>';
    // echo $man->password .'<br>';
?>