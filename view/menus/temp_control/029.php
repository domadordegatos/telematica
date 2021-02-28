        <table class="table table-bordered table-sm mt-3">
            <tr class="table-info">
                <td>Id</td>
                <td>Descripcion</td>
                <td>Fecha</td>
                <td>Observaciones</td>
                <td>Opcion</td>
            </tr>
        

<?php
      session_start();
      if (isset($_SESSION['temp_029'])):
        foreach (@$_SESSION['temp_029'] as $key) {
        $dat=explode("||", $key);
       ?>
       <tr>
         <th><?php echo $dat[0] ?></th>
         <th><?php echo $dat[1] ?></th>
         <th><?php echo $dat[2] ?></th>
         <th><?php echo $dat[3] ?></th>
        <th><a class="btn btn-sm <?php if($dat[4] == 2){ echo 'btn-danger'; }else{ echo 'btn-warning'; }?>" onclick="desactivar_029('<?php echo $dat[0]; ?>')">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggle-off" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
                    </svg><?php if($dat[4] == 2){ echo ' Activar'; }else{ echo ' Desactivar'; }?></a></th></tr>

<?php } endif;?>
</table>

