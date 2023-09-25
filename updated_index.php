
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
    
<form method="get">
<h3>Addition</h3>
First Number: <input type="number" name="add_first"><br>
Second Number: <input type="number" name="add_second"><br>
<button type="submit" formaction="addition.php">Add</button><br>
<h3>Division</h3>
Numerator: <input type="number" name="div_num"><br>
Denominator: <input type="number" name="div_den"><br>
<button type="submit" formaction="division.php">Divide</button><br>
</form>

    
<h3>Pythagorean Theorem</h3>
<form action="pythagorean.php" method="get">
Side A: <input type="number" name="side_a"><br>
Side B: <input type="number" name="side_b"><br>
<button type="submit">Calculate Hypotenuse</button><br>
</form>

    <a href="index.php">Reset</a>
</body>
</html>
