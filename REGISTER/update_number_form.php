<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>

<?php
        $x = $_GET['ID'];
        include 'db.php';
?>

        <form action="update_number.php" method="get">

        <p>NEW PHONE NUMBER</p>
        <input type="number" name="number" id="number">

        <input type="Submit" value="UPDATE">
        <input type="hidden" name="ID" value = "<?php echo $x; ?>">
        
        <hr>

        </form>

</body>
</html>