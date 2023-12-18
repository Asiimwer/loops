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
  
    <div class="container pt-5">
      <?php 
      if(isset($_POST)){
      
        $server ="localhost";
        $username = "root";
        $password = "";
        $database = "reports";

        $conn = new mysqli($server,$username,$password,$database);
        if($conn->connect_error){
            die("Connection failed".$conn->conect_error);
        }
      $students = $_POST['student'];
      $english = $_POST['english'];
      $mathematics = $_POST['mathematics'];
      $science = $_POST['science'];
      $social_studies  = $_POST['social_studies'];
      $english_mark="";
      $eng_marks="";
      $eng_mark="";
      $avg_total="";

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
      
      ?>

    <table class="p-5 table" border="1" >
        <tr>
            <th>Students name</th>
            <th>English</th>
            <th>Grade</td>
            <th>Mathematics</th>
            <th>Grade</td>
            <th>Science</th>
            <th>Grade</td>
            <th>SST</th>
            <th>Grade</th>
            <th>Aggregate</th>
            <th>Total Marks</th>
            <th>Average Marks</th>
        <?php 
          $eng_mark=0;
          $maths_marks=0;
          $sci_marks=0;
          $sst_marks=0;
          $average_total=0;
          $totals=0;
          $total_aggregate=0;
          $marks=0;
          $names=0;
          $mathematics_mark=0;
          for($row = 0;$row<=count($students)-1;$row++){?>
        <tr>
            <td><?php echo $students[$row]; ?></td>
            <td> <?php echo $english[$row];
              $eng_mark+=$english[$row];
            ?></td>
            <td><?php 
              $english_mark = grade($english[$row]); 
              echo $english_mark;
              ?>
            </td>
            <td><?php
              $maths_marks+=$mathematics[$row];
            echo $mathematics[$row]; ?></td>
            <td><?php
             $mathematics_mark = grade($mathematics[$row]); 
             echo $mathematics_mark;
             ?></td>
            <td><?php echo $science[$row]; ?></td>
            <td><?php
              $sci_marks+=$science[$row];
              $science_mark = grade($science[$row]);
            echo $science_mark;
             ?></td>
            <td><?php echo $social_studies[$row]; ?></td>
            <td><?php 
            $sst_marks+=$social_studies[$row];
            $social_studies_mark = grade($social_studies[$row]); 
            echo $social_studies_mark;
            ?></td>

  <!-- ERROR WITH MATHEMATICS OR MATHS MARK INSTEAD OF ENGLISH MARK -->
            
            <td><?php echo substr($english_mark,1) + substr($mathematics_mark,1) + substr($science_mark,1) + substr($social_studies_mark,1);
             ?></td>
                        <td><?php   $total= $english[$row]+$mathematics[$row]+$science[$row]+$social_studies[$row]; echo $total; 
              
              ?></td>
              
            <td><?php $total= $english[$row]+$mathematics[$row]+$science[$row]+$social_studies[$row]; 
                    $avg=$total;
            echo $avg/4;
            $average_total+=$avg;
            ?></td> 
        </tr>
        <!-- i moved the braket to line from 131 to 141 -->
        <?php } ?> 
        <?php
        
        $names= "INSERT INTO student_names(student) VALUES('$students[$row]')";
        $marks ="INSERT INTO marks(english,english_mark,mathematics,mathematics_mark,science,science_mark,social_studies,social_studies_mark) VALUES('$english[$row]','$english_mark','$mathematics[$row]','$mathematics_mark','$science[$row]',$science_mark,'$social_studies','$social_studies_mark')";
        if($conn->query($marks) === TRUE){
        
          echo "New Record Mark Successful";
        }else
        echo "Error:" .$marks. "<br>". $conn->error;
      
    }
       ?>
        <tr>
        <td><b>TOTALS</b><?php ?></td>
        <td><?php 
          $studentmarks="SELECT * FROM marks";
          $results=$conn->query($studentmarks);
          if($results->num_rows >0)
            while ($row=$results->fetch_assoc())
          $eng_marks=$eng_mark;
          echo $eng_marks; ?></td>
          <td><?php ?></td>
        <td><?php echo $maths_marks; ?></td>
        <td><?php ?></td>
        <td><?php echo $sci_marks; ?></td>
        <td><?php ?></td>
        <td><?php echo $sst_marks ?></td>
        <td><?php ?></td>
           
        </tr>
    </table>
    </div>
</body>
</html>

 
<td><?php 
               
 