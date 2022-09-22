<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Welcome ", $_POST["fname"], " ",$_POST["lname"]; ?> <br><br>
    <strong>Addition is: </strong> <?php $ADD = $_POST["no1"]+$_POST["no2"]; echo $ADD; ?> <br><br>
    <strong>Multiplication is: </strong> <?php echo $_POST["no1"]*$_POST["no2"]; ?>
</body>
</html>