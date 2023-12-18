<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/customized.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container pt-5 p-5 table1">
        <form action="process_student_data.php" method="POST">   
    <table class="table"  border="5">
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Stream</th>
        <th>Mathematics</th>
        <th>English</th>
        <th>Science</th>
        <th>Social Studies</th>
        <?php for($row=0; $row<=2; $row++){?>
    <tr>
        <td><input type="text" name="pupils_name[]"  placeholder="Puplils Name"></td>
        <td><input type="text" name="class[]"  placeholder="Pupils Class"></td>
        <td><input type="text" name="stream[]"  placeholder="Pupils Stream"></td>
        <td><input type="text" name="mathematics[]"  placeholder="Mathematics Mark"></td>
        <td><input type="text" name="english[]"   placeholder="English Mark"></td>
        <td><input type="text" name="science[]"   placeholder="Science Mark"></td>
        <td><input type="text" name="social_studies[]"   placeholder="Social Studies Mark"></td>
        
    </tr>
        
    <?php } ?>
        </table>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>
    
</body>
</html>