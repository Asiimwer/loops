<?php
    if($_POST['no_of_rows']){
        
    $no_rows= $_POST['no_of_rows'];
        ?>
    <table>
        <tr>
    <th>Name</th>
    </tr>
    <?php  for($row=0; $row<=$no_rows; $row++){
 ?>
    <tr>
    <td><input type="text"></td>
    </tr>
    <?php }?>
    </table>
    <?php
    }
?>