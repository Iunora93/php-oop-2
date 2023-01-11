<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ ."/../traits/Typologyitem.php";
class Toy extends Category{
    public $typology;
    public $format;
    public $price;

    public function __construct(array $typology, array $format, int $price)
    {
     $this->typology = $typology;
     $this->format = $format;
     $this->price = $price;
    }
    function correctprice($price){
        try {
            if (!is_int($price)){
                throw new Exception("Non è un numero");
            } else{
			
                 $this->price = $price;
			}
            } catch (Exception $e){
                echo "Eccezione: " . $e->getMessage();
        }
    }
}

?>