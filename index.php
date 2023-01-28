<?php
 //naming convention on php use snake case rule
 $first_name = "Emanuel";
 $last_name = "Prasetyawan";

 //assignment operator
 $full_name = "Emanuel";
 $full_name .= " ";
 $full_name .= "Prasetyawan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Hi, Welcome 
        <!-- concatenation on php use '.' -->
        <?php echo  $first_name . " " . $last_name ?>
    </h1>
    <h2>Hi, Welcome
        <?php echo  $full_name ?> 
    </h2>
</body>
</html>