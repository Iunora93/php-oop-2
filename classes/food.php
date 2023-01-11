<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ ."/../traits/Typologyitem.php";
class Food extends Category{
    use Typologyitem;
    use Formatitem;
    use Priceitem;

    public function __construct(array $typology, array $format, float $price)
    {
     $this->typology = $typology;
     $this->format = $format;
     $this->price = $price;
    }
}

?>