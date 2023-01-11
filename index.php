<?php
    require_once __DIR__ . "/classes/Category.php";
    require_once __DIR__ . "/classes/Food.php";
    require_once __DIR__ ."/classes/Toy.php";

    $categories = [
        new Category("Cane", ["Cocker Spaniel", "Labrador Retriever", "Golden Retriever", "Pitbull", "Bassotto",], ["male", "female"], ["adult", "puppy"]),
        new Category("Gatto", ["Scottish Fold", "British Shothair", "Siamese", "Main Coon", "Bengala",], ["male", "female"], ["adult", "puppy"]),
    ];

    
    $foods = [
        new Food(["Secco", "Umido"], ["Maxi", "Grande", "Medio", "Piccolo"], 43,50),    
    ];

    

    $toys = [
        new Toy(["Collari", "Masticativi"], ["Maxi", "Grande", "Medio", "Piccolo"], 43,50),
    ];

    
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
                <?php foreach( $foods as $food ) { ?>          
                    <h4>Tipologia di alimentazione:</h4>
                    <?php foreach ($food->typology as $typo) { ?>
                    <li><?php echo $typo; ?></li>
                <?php } ?> 
                <h4>Formato:</h4> 
                <?php foreach ($food->format as $form) { ?>
                    <li><?php echo $form; ?></li>
                <?php } ?> 
                <?php foreach( $toys as $toy ) { ?>
            <h4>Giochi:</h4>
                <?php foreach ($toy->typology as $typo) { ?>
                    <li><?php echo $typo; ?></li>
                <?php } ?> 
                <li><?php echo $toy->price; ?></li>            
        <?php } ?>                         
            <?php } ?>             
        <?php } ?>
    </ul>
</body>
</html>