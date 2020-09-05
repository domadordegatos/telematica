<?php
session_start();
 ?>
      <?php
      if (isset($_SESSION['tabla_f_002_temp'])):
        foreach (@$_SESSION['tabla_f_002_temp'] as $key) {
        $dat=explode("||", $key);
       ?>
       <tr>
         <th><?php echo $dat[3] ?></th>
         <th><?php echo $dat[0]." ".$dat[1] ?></th>
         <th><?php echo $dat[2] ?></th>
         <th><?php echo $dat[4] ?></th>
         <th><?php echo $dat[5] ?></th>
         <th></th>
       </tr>

<?php } ?>

<?php endif;?>

