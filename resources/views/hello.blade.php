<?php

// In your controller or view file
$photoFilenames = [
    'photo1.jpg',
    'photo2.jpg',
    'photo3.jpg',
    // Add more filenames as needed
];

$randomPhoto = $photoFilenames[array_rand($photoFilenames)];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="css/style.css">

   

</head>

<body>
    <div class="div1">Hello World..</div>
    <div class="div2">
        <img src="images/cat.jpg" alt="Cat Image">
        meoww...!!
    </div>
    <div class="div3">
        <img src="https://source.unsplash.com/200x200/?cute-dog" alt="">
        bhooo...!!
    </div>
   
</body>

</html>