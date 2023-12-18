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
        <form action="process_shopping.php" method="POST">   
    <table class="table"  border="5">
    <tr>
        <th>ITEM</th>
        <th>QUATITY</th>
      
        <?php for($row=0; $row<=1; $row++){?>
    <tr>
        <td><input type="text" name="item[]"  placeholder="Name of Item"></td>
        <td><input type="text" name="quantity[]"  placeholder="Quatity of the Item"></td>
        <td><input type="text" name="price[]"  placeholder="Price of the Item"></td>        
    </tr>
        
    <?php } ?>
    
    <td><label>Estimated Budget</label><input type="number" name="budget"  placeholder="Estimated Budget"></td>

        </table>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>
    
</body>
</html>