<?php
include("../../Model/model.php");

if(isset($_POST['input'])){
    $input =$_POST['input'];

    $connection = new db();
    $conobj=$connection->opencon();
    $userQuery=$connection->Search($input,"product",$conobj);
    if ($userQuery->num_rows > 0) 
    {
        ?>
        <div class="Section">
        <table class="table table-bordered table-striped mt-4">
        <thead>
        <tr>
           <th>&nbsp;&nbsp;Router&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;Range&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;Price&nbsp;&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $userQuery->fetch_assoc()){
            $router=$row["router"];
            $range=$row["range"];
            $price=$row["price"];

            ?>


            <tr>
                <td>&nbsp;&nbsp;<?php echo $router; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $range; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $price; ?>&nbsp;&nbsp;</td>
            </tr>

            <?php

        }
        ?>
        </tbody>
        </table>
        <?php
    } else{
        ?>
        <td>No data founded</td><?php
    }?>
    </div>
    <?php
}

?>