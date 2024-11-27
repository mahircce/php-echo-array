<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php LAB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $name="Mahir";
    $age="20";
    echo "My name is $name and I am $age years old.\n";
    
    $favoritecolors=["black","white","green"];
    echo"My favorite colors are:\n";
    foreach($favoritecolors as $color){
        echo"$color\n";
    }  
    ?>
</body>
</html>
