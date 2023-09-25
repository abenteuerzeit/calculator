
<html>
<head>
    
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    h3 {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }
    form {
        margin-bottom: 20px;
    }
    button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <?php
        $side_a = $_GET['side_a'];
        $side_b = $_GET['side_b'];
        $hypotenuse = sqrt(pow($side_a, 2) + pow($side_b, 2));
    ?>
    <h4>The length of the hypotenuse is: <?= $hypotenuse ?></h4>
    <a href="index.php">Reset</a>
</body>
</html>
