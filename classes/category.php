<?php

class Category {
    public $genre;
    public $races;
    public $sex;
    public $age;

    public function __construct(string $genre, array $races, array $sex, array $age)
    {
     $this->genre = $genre;
     $this->races = $races;
     $this->sex = $sex;
     $this->age = $age;
    }
}

?>