<?php
require_once __DIR__ . "/classes/category.php";

$category = new Category(["cane","gatto"], ["Cocker Spaniel", "Scottish Fold"], ["male", "female"], ["adult", "puppy"]);

var_dump($category);