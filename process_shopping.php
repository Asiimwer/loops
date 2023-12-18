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
    <div class="container pt-5">
      <?php
        $item_name= $_POST['item'];
        $quantity = $_POST['quantity'];  
        $budget= $_POST['budget'];
         $price= $_POST['price'];
        $english_mark="";
        $eng_marks="";
        $eng_mark="";
        $avg_total="";
        $max_grade="";
        $mathematics_total="";
        $balance="";

    //     function price($mark){
    //     $grade="";
    //     if($mark>=200000 && $mark<=400000) {
    //       $grade="D1";
    //     }elseif($mark>=80 && $mark<=89){
    //       $grade="D2";
    //     }elseif($mark>=70 && $mark<=79){
    //       $grade="C3";
    //     }elseif($mark>=60 && $mark<=69){
    //       $grade="C4";
    //     }elseif($mark>=50 && $mark<=59){
    //       $grade="C5";
    //     }elseif($mark>=40 && $mark<=49){
    //       $grade="C6";
    //     }elseif($mark>=30 && $mark<=39){
    //       $grade="P7";
    //     }elseif($mark>=20 && $mark<=29){
    //       $grade="P8";
    //     }elseif($mark>=0 && $mark<=19){
    //       $grade="F9";
    //     }
    //     return $grade;
    //   }

    //   function remarks($remark){
    //     $position="";
    //     if($remark>=90 && $remark<=100) {
    //       $position="Very Excellent";
    //     }elseif($remark>=80 && $remark<=89){
    //       $position="Excellent";
    //     }elseif($remark>=70 && $remark<=79){
    //       $position="Very Good";
    //     }elseif($remark>=60 && $remark<=69){
    //       $position="Good";
    //     }elseif($remark>=50 && $remark<=59){
    //       $position="Fair";
    //     }elseif($remark>=40 && $remark<=49){
    //       $position="Try Harder!!";
    //     }elseif($remark>=30 && $remark<=39){
    //       $position="Revise Harder!!";
    //     }elseif($remark>=20 && $remark<=29){
    //       $position="Failing!!";
    //     }elseif($remark>=0 && $remark<=19){
    //       $position="Failed!!";
    //     }
    //     return $position;
    //   }
     
    //   for($row=0;$row<=1;$row++){

    //   $marks = "INSERT INTO marks(pupils_name,class,stream,mathematics,english,science,social_studies) VALUES ('$pupil_name[$row]','$class[$row]','$stream[$row]','$mathematics[$row]','$english[$row]','$science[$row]','$sst[$row]')";
    //   if($conn->query($marks) === TRUE){
    //     echo "New Record Mark Successful";
    //   }else
    //   echo "Error:" .$marks. "<br>". $conn->error;
    // }
      ?>
      <?php
      $marks=0;
      $mark=0;
      $array_count=0;
      $max_grade=0;
      $total_price=0;
      $price_total=0;
      $science_total=0;
      $balance=0;
      ?>
      <div>

    <table class="p-5 table" border="1" >
        <tr>
            <th>Item</th>
            <th>Quatity</th> 
            <th>Price</td>
            <th>Total Price</th>
           
          </tr>
     <?php 
          for($row=0;$row<=1;$row++){?>
        
        <tr>          
        <td><?php
                echo $item_name[$row];
               ?>
          </td>

          <td><?php 
              echo $quantity[$row];
               ?>
         </td>

          <td><?php
                  echo $price[$row];
                                 ?>
          </td>

         <td>
            <?php
               $total_price = $quantity[$row]*$price[$row];
               echo $total_price;
               $price_total+=$total_price;
           ?>
         </td>
         <td>
          
              
            
          </td>
        
      <?php } ?>
            <tr>
             <th> <label><b>TOTALS</b></label> </th>
             <th><label class=""><b></b></label>
             <th><label class=""><b></b></label>
             <th><label class=""><b>Toatal Price</b></label>
             <th><label class=""><b>Balance</b></label>

             <th><b></b></th>
           </tr>

          <tr>
          <td class=""><?php
          
           ?></td>
          <td class=""><label class="text"><?php
          
           ?>
           </label></td>
          <td class=""><label class="text"><?php 
            
          ?>
          </label></td>
          
          </label></b></td>
         
          </b></label>
          <td class=""><?php  
           echo $price_total ?></td>
          </b></label></td>
          <td>  <?php $balance = $budget - $price_total;
                 echo $balance; ?> </td>
      
          </tr>
          <?php ?>