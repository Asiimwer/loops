   </tr>
          <tr>
          <td><b>TOTALS</b><?php ?></td>
          <td><?php 
          $eng_marks=$eng_mark;
          echo $eng_marks; ?></td>
          <td><?php echo substr($english_mark,1) + substr($mathematics_mark,1)+ substr($sci_marks,1);
             ?></<?php ?></td>
        <td><?php echo $maths_marks; ?></td>
        <td><?php ?></td>       
        </tr>
    </table>
    <table class="table p-5 pt-5" border="5">
    <tr class="">
            <th class=""><label class="text-center">Remarks</label></th>
        </td>
      </tr>
        <tr>
          <?php for($row=1; $row<=3; $row++){?>

          <td>
              <?php  $ident=$identity[$row];
                      echo $ident;     
                
              ?>
          </td>

          <td>
            <?php  echo $remark[$row];?> <br />
            <label class="blockquote-footer"><b>Name: <?php echo $remark_name[$row];?> </b></label> 
          </td>
         </tr>
       <?php }?>
        </table>
    </div>
</body>
</html>

<!-- 
<td><?php 
               
               $total= $english[$row]+$mathematics[$row]+$science[$row]+$social_studies[$row]; echo $total; 
              
               ?></td>
               
             <td><?php $total= $english[$row]+$mathematics[$row]+$science[$row]+$social_studies[$row]; 
                     $avg=$total;
             echo $avg/4;
             $average_total+=$avg;
             ?></td> -->
             <!-- REMARKS -->
             <table class="table" border="2" >
        <tr>
        <th class="text-center"><h2><b>Remarks</b></h2></th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Identity</th>
            <th>Remark</th>
        </tr>
        <?php for($row=0; $row<=3; $row++){?>
        <tr>
            <td><label>Name</label> <input type="textarea" class=" remarksinputs" name="name[]" placeholder=" Name"></td>
            <td><label>Name</label> <input type="textarea" class=" remarksinputs" name="identity[]" placeholder="Persons Identity"></td>
            <td class="pt-3"><lable>Remark</label> <input type="text" class="" name="remark[]" placeholder="Remark">
        </tr>
        <?php } ?>
            
    </table>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>  
    <!-- INTRODUCTION -->
        <label><b>Pupils Name</b></label> <input name="pupils_name" class="inputs" placeholder="Pupils Name"> <br />
        <label><b>Student Number</b></label> <input name="pupils_number" class="inputs" placeholder="Pupils number"> <br />
        <label><b>Pupils Class</b></label> <input name="pupils_class" class="inputs" placeholder="Pupils Class "> <br />


        <!-- MY REPORT SYSTEM -->
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
      if(isset($_POST)){
      
        $server ="localhost";
        $username = "root";
        $password = "";
        $database = "school_management_system";

        $conn = new mysql($server,$username,$password,$database);
        if($conn->connect_errno){
            die("Connection failed".$conn->conect_error)
        }
      $pupil_name= $_POST['pupils_name'];
      $class = $_POST['class'];
      $stream = $_POST['stream'];
      $mathematics = $_POST['mathematics'];
      $english = $_POST['english'];
      $science  = $_POST['science'];
      $sst = $_POST['social_studies'];      
      $english_mark="";
      $eng_marks="";
      $eng_mark="";
      $avg_total="";
      $subjects=$_POST=["Mathematics", "English", "Science", "Social Studies",];
      $max_grade="";
      $mathematics_total="";
      $english_mark="";
      function grade($mark){
        $grade="";
        if($mark>=90 && $mark<=100) {
          $grade="D1";
        }elseif($mark>=80 && $mark<=89){
          $grade="D2";
        }elseif($mark>=70 && $mark<=79){
          $grade="C3";
        }elseif($mark>=60 && $mark<=69){
          $grade="C4";
        }elseif($mark>=50 && $mark<=59){
          $grade="C5";
        }elseif($mark>=40 && $mark<=49){
          $grade="C6";
        }elseif($mark>=30 && $mark<=39){
          $grade="P7";
        }elseif($mark>=20 && $mark<=29){
          $grade="P8";
        }elseif($mark>=0 && $mark<=19){
          $grade="F9";
        }
        return $grade;
      }

      function remarks($remark){
        $position="";
        if($remark>=90 && $remark<=100) {
          $position="Very Excellent";
        }elseif($remark>=80 && $remark<=89){
          $position="Excellent";
        }elseif($remark>=70 && $remark<=79){
          $position="Very Good";
        }elseif($remark>=60 && $remark<=69){
          $position="Good";
        }elseif($remark>=50 && $remark<=59){
          $position="Fair";
        }elseif($remark>=40 && $remark<=49){
          $position="Try Harder!!";
        }elseif($remark>=30 && $remark<=39){
          $position="Revise Harder!!";
        }elseif($remark>=20 && $remark<=29){
          $position="Failing!!";
        }elseif($remark>=0 && $remark<=19){
          $position="Failed!!";
        }
        return $position;
      }
      ?>
      <?php
      $marks=0;
      $mark=0;
      $array_count=0;
      $max_grade=0;
      $mathematics_total=0;
      $english_total=0;
      $science_total=0;
      $sst_total=0;
      ?>
      <div>
      
         <?php  for($row=0;$row<=1;$row++){?>
        <label class="name"><b>Pupils Name :</b> </label> <label> <?php  echo $pupil_name[$row];?> </label> <br />
        <label  class="class"><b>Pupils Class</b></label> <label><?php echo $class[$row];?></label> <br />
        <label  class="stream"><b>Pupils Stream</b></label> <label><?php echo $stream[$row];?></label> <br />
        <label></label> <label></label>
            
          
          <?php   }?>
             

      </div>

      <table class="p-5 table" border="1" >
        <tr>
            <th>Subject</th>
            <th>Mark</th> 
            <th>Grade</td>
            <th>Max. Mark</th>
            <th>Grade</th>
            <th>Remark</td>
           
          </tr>
     <?php 
          for($row=0;$row<=0;$row++){?>
        
        <tr>          
        <td><?php
                echo $subjects[$row];
               ?>
          </td>

          <td><?php
                  echo $mathematics[$row];
                  $mathematics_total+=$mathematics[$row];               ?>
          </td>

          <td><?php 
              $mathematics_mark = grade($mathematics[$row]);
              echo $mathematics_mark;
               ?>
         </td>

         <td>
            <?php
                $x=100;
                echo $x;
           ?>. 0
         </td>
         <td>
          
              D<?php
                 $y=1;
                 echo $y;
                 $max_grade+=$y;
            ?>
          </td>
         <td>
            <?php 
              $mathematics_remark= remarks($mathematics[$row]);
              echo $mathematics_remark;
            ?>
          </td>
          </tr>
          <tr>
          <td>                
              <label>English</label> 
          </td>
          <td><?php
                  echo $english[$row];
                  $english_total += $english[$row];
               ?>
          </td>

          <td><?php 
              $english_mark = grade($english[$row]);
              echo $english_mark;
               ?>
         </td>

         <td>
            <?php
                $x=100;
                echo $x;
           ?>. 0
         </td>
         <td>
          
              D<?php
                 $y=1;
                 echo $y;
                 $max_grade+=$y;
            ?>
          </td>

         <td>
           <?php 
               $english_remark= remarks($english[$row]);
               echo $english_remark;              
           ?>
            
           </td>  
      </tr>

      <tr>
          <td>                
              <label>Science</label> 
          </td>
          <td><?php
                  echo $science[$row];
                  $science_total += $science[$row];
               ?>
          </td>

          <td><?php 
              $science_mark = grade($science[$row]);
              echo $science_mark;
               ?>
         </td>

         <td>
            <?php
                $x=100;
                echo $x;
           ?>. 0
         </td>
         <td>
          
              D<?php
                 $y=1;
                 echo $y;
                 $max_grade+=$y;
            ?>
          </td>
          
         <td>
           <?php 
               $science_remark= remarks($science[$row]);
               echo $science_remark;              
           ?>
           </td>  
        </tr>       

        <tr>
          <td>                
              <label>Social Studies</label> 
          </td>
          <td><?php
                  echo $sst[$row];
                  $sst_total += $sst[$row];
               ?>
          </td>

          <td><?php 
              $sst_mark = grade($sst[$row]);
              echo $sst_mark;
               ?>
         </td>

         <td>
            <?php
                $x=100;
                echo $x;
           ?>. 0
         </td>
         <td>
          
              D<?php
                 $y=1;
                 echo $y;
                 $max_grade+=$y;
            ?>
          </td>
          
         <td>
           <?php 
               $sst_remark= remarks($sst[$row]);
               echo $sst_remark;              
           ?>
            
           </td>  
      <?php } ?>
            <tr>
             <th> <label><b>TOTALS</b></label> </th>
             <th><label class=""><b>Total Mark</b></label>
             <th><label class=""><b>Aggregate</b></label>
             <th><label class=""><b>Max. Total</b></label>
             <th><label class=""><b>Best. Aggregate</b></label>
             <th><b></b></th>
           </tr>

          <tr>
          <td class=""><?php
          
           ?></td>
          <td class=""><label class="text"><?php
           $totals= $mathematics_total+$english_total+$science_total+$sst_total; 
           echo $totals;
           ?>
           </label></td>
          <td class=""><label class="text"><?php 
            $my_aggregate= substr($mathematics_mark,1)+substr($english_mark,1)+ substr($science_mark,1)+ substr($sst_mark,1);
            echo $my_aggregate;
          ?>
          </label></td>
          <td class=""><label class="sec_text"><b><?php 
            $max_mark=$x*4;
            echo $max_mark;
          ?>
          </label></b></td>
          <td class=""> <label class="sec_text"><b><?php
            $total_grade = $y*4;
            echo $total_grade;
          ?></b></label></td>
          <td class=""><?php ?></td>
          
          </tr>
          <tr>
            <th><b>AVERAGE</b></th>
            <th><b>Average Mark</b></th>
            <th>Average Grade</b></th>
            <th><b>Best Average Mark</b></th>
            <th><b>Best Average Grade</b></th>
            <th><b></b></th>
          </tr>
          <tr>
          <td class=""><?php ?></td>
          <td class=""><label class="text"><?php
            $average= $totals/4 ;
            echo $average;
          ?></label></td>
          <td class=""><label class="text"><?php
              $average_grade= grade($average);
              echo $average_grade;
           ?></label></td>
           <td class=""><label class="sec_text"><?php
            $average_best = $max_mark/4;
            echo $average_best;
           ?></label></td>
           <td class=""><label class="sec_text"><?php
            $best_grade = $total_grade/4;
            echo $best_grade;
           ?></label></td>
          </tr>
          </table>
           <?php
            
      function students_remark($remark){
        $remarking="";
        if($remarking>=4 && $remarking<=5) {
          $student_comment="Very Excellent";
        }elseif($remarking>=6 && $remarking<=8){
          $student_comment="Excellent";
        }elseif($remarking>=9 && $remarking<=10){
          $student_comment="Very Good";
        }elseif($remarking>=11 && $remarking<=12){
          $student_comment="Good";
        }elseif($remarking>=13 && $remark<=15){
          $student_comment="Fair";
        }elseif($remarking>=16 && $remarking<=20){
          $student_comment="Try Harder!!";
        }elseif($remarking>=21 && $remarking<=26){
          $student_comment="Revise Harder!!";
        }elseif($remarking>=27 && $remark<=29){
          $student_comment="Failing!!";
        }elseif($remarking>=30 && $remarking<=32){
          $student_comment="Failed!!";
        }
        return $remarking;
      
        }  ?>
          <label class="sec_text"><b>REMARKS</b></label>
          <table class="table">
            <tr>
            <td class="">Student<label class=""><?php
            ?></label></td>
            <td class=""><label class=""><?php
              $student_remarks = students_remark($max_mark);
              echo $student_remarks;
            ?></label></td>
            </tr>
          </tablel>
          <?php } ?>
