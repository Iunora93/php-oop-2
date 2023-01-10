<?php
    require_once __DIR__ . "/classes/category.php";

    $categories = [
        new Category("cane", ["Cocker Spaniel", "Labrador Retriever", "Golden Retriever", "Pitbull", "Bassotto",], ["male", "female"], ["adult", "puppy"]),
        new Category("gatto", ["Scottish Fold", "British Shothair", "Siamese", "Main Coon", "Bengala",], ["male", "female"], ["adult", "puppy"]),
    ];

    var_dump($categories);

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
            <li>
                <?php foreach ($category->races as $race) { ?>
                    <span><?php echo $race; ?></span>
                <?php } ?>    
            </li>
        <?php } ?>
    </ul>
</body>
</html>