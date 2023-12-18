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
        $database = "grade_management";

        $conn = new mysqli($server,$username,$password,$database);
        if($conn->connect_errno){
            die("Connection failed".$conn->conect_error);
        }

        $pupil_name= $_POST['pupils_name'];
        $class = $_POST['class'];
        $stream = $_POST['stream'];
        $mathematics = $_POST['mathematics'];
        $english = $_POST['english'];
        $science  = $_POST['science'];
        $sst = $_POST['social_studies'];     
        $english_grade="";
        $science_grade="";
        $sst_grade=""; 
        $english_mark="";
        $eng_marks="";
        $eng_mark="";
        $avg_total="";
        $subjects=$_POST=["Mathematics", "English", "Science", "Social Studies",];
        $max_grade="";
        $mathematics_total="";
        $math_total="";
        $math_grade ="";

        // for($row=0;$row<=1;$row++){

        // $sql = "INSERT INTO details(pupils_name,class,stream) VALUES ('$pupil_name[$row]','$class[$row]','$stream[$row]')";
        // if($conn->query($sql) === TRUE){ 
        //   echo "New Record Made Successful"; 
        // }else
        // echo "Error:" .$sql. "<br>". $conn->error;
      

        //   }
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
     
      for($row=0;$row<=2;$row++){
        
        $math_grade = grade($mathematics[$row]);
        $remarks = remarks($mathematics[$row]);
        $aggregate = substr($math_grade,1) + substr($english_grade,1)+ substr($science_grade,1) + substr($sst_grade,1);

        
       $english_grade = grade($english[$row]);
       $remarks = remarks($english[$row]);
        
       $science_grade = grade($science[$row]);
       $remarks = remarks($science[$row]);

       
       $sst_grade = grade($sst[$row]);
       $remarks = remarks($sst[$row]);
       $marks = "INSERT INTO marks(pupils_name,class,stream,mathematics,math_grade,english,english_grade,science,science_grade,social_studies,sst_grade,aggregate,remarks) VALUES ('$pupil_name[$row]','$class[$row]','$stream[$row]','$mathematics[$row]','$math_grade','$english[$row]','$english_grade','$science[$row]','$science_grade','$sst[$row]','$sst_grade','$aggregate','$remarks')";
      
      if($conn->query($marks) === TRUE){

        echo "New Record Mark Successful";
      }else
      echo "Error:" .$marks. "<br>". $conn->error;
      }
      // fetching from the database
      // $studentmarks="SELECT * FROM marks";
      // $results=$conn->query($studentmarks);
      // if($results->num_rows >0){
      //   while ($row=$results->fetch_assoc()){
      //     echo $row['pupils_name'];
      //   }
      // }
    }
      ?>
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
        <table class="table" border="3">
          <tr> 
            <th>Students Names</th>
            <th>Class</th>
            <th>Stream</th>
            <th>Mathematics</th>
            <th>Grade</th>
            <th>English</th>
            <th>Grade</th>
            <th>Science</th>
            <th>Grade</th>
            <th>SST</th>
            <th>Grade</th>
            <th>Aggregate</th>
            <th>Remark</th>
          </tr>
          <?php 
             $studentmarks="SELECT * FROM marks";
             $results=$conn->query($studentmarks);
             if($results->num_rows >0){
               while ($row=$results->fetch_assoc()){
               
               
          ?>
          <tr>
          <td ><?php
               echo $row['pupils_name'];
          ?></td>
          <td>
          <?php               
               echo $row['class']
          ?>
          </td>

          <td ><?php
               echo $row['stream'];
          ?></td>
          <td>
          <?php               
               echo $row['mathematics']
          ?>
          </td>
          <td ><?php
               echo $row['math_grade'];
          ?></td>
          <td>
          <?php               
               echo $row['english']
          ?>
          </td>

          <td ><?php
               echo $row['english_grade'];
          ?></td>
          <td>
          <?php               
               echo $row['science']
          ?>
          </td>
          <td ><?php
               echo $row['science_grade'];
          ?></td>
          <td>
          <?php               
               echo $row['social_studies']
          ?>
          </td>
          <td ><?php
               echo $row['sst_grade'];
          ?></td>

          <td>
          <?php               
               echo $row['aggregate']
          ?>
          </td>
          <td ><?php
               echo $row['remarks'];
          ?></td>
          
        </tr>
        
        <?php } }?>
        </table>
      </body>
      </html>
