<?php
if(isset($_COOKIE["font-size"])) {
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = "10px";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequuntur esse perspiciatis id repellendus officia unde harum accusantium maxime eius! Praesentium, sequi dolores voluptas sit officiis dignissimos accusamus beatae. Dolor.</p>
</body>

</html>