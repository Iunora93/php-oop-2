<?php
require_once __DIR__ . "/classes/category.php";

$categories = [
    new Category("cane", ["Cocker Spaniel", "Labrador Retriever", "Golden Retriever", "Pitbull", "Bassotto",], ["male", "female"], ["adult", "puppy"]),
    new Category("gatto", ["Scottish Fold", "British Shothair", "Siamese", "Main Coon", "Bengala",], ["male", "female"], ["adult", "puppy"]),
];

var_dump($categories);