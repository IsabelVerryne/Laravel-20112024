<?php

class Person {

    public string $name;
    public string $haircolour;

    public function __construct($name) {

        $this->name =$name;
    }

    public function getName(){

    }

    public static function fetchUsers($apiKey){

    }
}

class DatabaseMysql {

    public function fetchData() {

    }

}

class DatabasePostgress {
public function fetchData() {

}

}

class User {
    public $databse;

    public function __construct() {

        $this->database = $database;
    }

    public function getUsers() {
        $this->database->fetchData();
    }
}


//$person1 = new Person("Iemie");
//$person2 = new Person("Verryne");

//echo $person1->name;
//echo $person2->name;

// $person1->getName();
// $person2->fethcUsers();
$database = new DatabaseMysql();
$user = new User($database);



?>