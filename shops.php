<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container pt-5" >
        <form action="shops_process.php" method="POST">
    <table class="table"  border="3">
    <tr>
        <th>Shop Name</th>
        <th>Product</th>
        <th>Unit Cost</U></th>
        <th>Quatity</th>
        
        <?php for($row=1; $row<=5; $row++){?>
    <tr>
        <td><input type="text" name="shop_name[]" > </td>
        <td><input type="text" name="product[]"></td>
        <td><input type="text" name="unit_cost[]"></td>
        <td><input type="text" name="quatity[]"></td>
    </tr>

    <?php } ?>
    </table>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>
    
</body>
</html>