<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple form</title>
</head>
<body>
 <!------this form uses get----->
    <h1>Student info</h1>
    <form action="get.php" method="get">
        <strong>Name:</strong> <input type="text" name="stu_name">
        <strong>Age:</strong>    <input type="text" name="stu_age">
        <strong>Weight:</strong>  <input type="text" name="stu_weight"> </br>
        <input type="submit" >
    </form>
</body>
</html>