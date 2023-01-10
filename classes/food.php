<?php

class Food {
    public $typology;
    public $format;
    public $price;

    public function __construct(array $typology, array $format, float $price)
    {
     $this->typology = $typology;
     $this->format = $format;
     $this->price = $price;
    }
}

?>