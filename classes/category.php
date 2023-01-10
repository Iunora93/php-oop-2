<?php

class Category {
    public $genre;
    public $race;
    public $sex;
    public $age;

    public function __construct(string $genre, array $race, array $sex, array $age)
    {
     $this->genre = $genre;
     $this->race = $race;
     $this->sex = $sex;
     $this->age = $age;
    }
}

?>