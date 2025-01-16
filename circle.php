<!--
Author: Jay Morley
Date: 01/16/2025
File: circle.php
Purpose: PHP Practice
-->
<html>
<head>
    <title>Circle Calculation</title>
</head>
<body>

    <h1>Circle Calculation</h1>

    <?php
        $radius = $_POST['radius'];
        $area = pi() * pow ($radius, 2);
        $circumference = 2 * pi() * $radius;

        print ("<p>A circle with a radius of $radius has an area of $area and a circumference of $circumference.</p>");
        
    ?>
    <p><a href="circle.html">Calculate another cirle?</a></p>
</body>
</html>