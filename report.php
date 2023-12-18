]<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <form action="reports_process.php" method="POST">
    <table class="table"  border="5">
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>English</th>
        <th>Mathematics</th>
        <th>Science</th>
        <th>SST</th>
        <?php for($row=1; $row<=2; $row++){?>
    <tr>
        <td> <?php echo $row; ?></td>
        <td> <input type="text" name="student[]">  </td>
        <td><input type="text" name="english[]"></td>
        <td><input type="text" name="mathematics[]"></td>
        <td><input type="text" name="science[]"></td>
        <td><input type="text" name="social_studies[]"></td>
    </tr>

    <?php } ?>
    </table>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>
    
</body>
</html>