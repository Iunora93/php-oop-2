<?php
    require_once __DIR__ . "/classes/Category.php";
    require_once __DIR__ . "/classes/Food.php";

    $categories = [
        new Category("Cane", ["Cocker Spaniel", "Labrador Retriever", "Golden Retriever", "Pitbull", "Bassotto",], ["male", "female"], ["adult", "puppy"]),
        new Category("Gatto", ["Scottish Fold", "British Shothair", "Siamese", "Main Coon", "Bengala",], ["male", "female"], ["adult", "puppy"]),
    ];

    var_dump($categories);

    $foods = [
        new Food(["Secco", "Umido"], ["Maxi", "Grande", "Medio", "Piccolo"], 43,50),
        new Food(["Secco", "Umido"], ["Maxi", "Grande", "Medio", "Piccolo"], 21,50),
    ];

    var_dump($foods);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-shop</title>
</head>
<body>
    <ul>
        <?php foreach( $categories as $category ) { ?>
            <h2><?php echo $category->genre; ?></h2>
            <h4>Razza:</h4>
                <?php foreach ($category->races as $race) { ?>
                    <li><?php echo $race; ?></li>
                <?php } ?>               
        <?php } ?>
    </ul>
</body>
</html>