<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container pt-5">
      <?php 
      $shop_name = $_POST['shop_name'];
      $products = $_POST['product'];
      $unit_costs = $_POST['unit_cost'];
      $quatity = $_POST['quatity'];
      $avg_quantity="";
      $avg_unitcost="";
      $total="";
      $price="";
      $total_cost="";
      ?>
    <table class="p-5 table" border="1" >
        <tr>
            <th>SHOP NAME</th>
            <th>PRODUCT</th>
            <th>UNIT COST</td>
            <th>QUANTITY</th>
            <th>Price</td>
        </tr>
        <?php 
        $array_count=count($products);
        $total_quantity = 0;
        $total_cost=0;
        $totals=0;
        $count=0;
        for($row= 0; $row<=$array_count-1; $row++){
                $count++;
        ?>          
          <tr>
            <td><?php echo $shop_name[$row]; ?></td>
            <td><?php echo $products[$row];?></td>
            <td><?php 
            echo $unit_costs[$row];
            $total_cost+=$unit_costs[$row];
            ?></td>
            
            <td>
                <?php 
                    echo $quatity[$row]; 
                    $total_quantity+=$quatity[$row];
                ?>
            </td>
            <td><?php 
                $price=$unit_costs[$row]*$quatity[$row];
                $numbers=number_format($price);
                $totals+=$price;
                echo $numbers;
                
                ?></td>  
        <?php } ?>
        </tr>
        <tr>
            <th>Totals</th>
            <th></th>
            <th>Average unite Cost</th>
            <th>Average quatity</th>
            <th>Total price</th>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td class="avg-unitcost"><?php $avg_unitcost=$total_cost;

                echo number_format($avg_unitcost/$count);
            ?></td>
            <td class="avg-quantity"><?php $avg_quantity= $total_quantity;
                echo $avg_quantity/$count;
            ?></td>
            
            <td class="total"><?php 
                         echo number_format($totals);
                    
                                
            ?></td>
            </tr>
    </table>
    </div>
</body>
</html>


