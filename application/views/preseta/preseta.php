<a href="/preseta/add"><button class="btn btn-danger">Add</button></a>
 <table class="table table-bordered">
    <tr class="title">
        <td>Id</td>
        <td>Preseta</td>
        <td>Action</td>

    </tr>
    <?php foreach ($pres as $preseta){?>
 <tr>
 <tr>
     <td><?php echo $preseta['id'] ?></td>
     <td><?php echo $preseta['nr_presetei']?></td>
     <td>
         <a href="/preseta/delete/<?php echo $preseta['id']?>"><button class="btn btn-danger">Delete</button></a>
         <a href="/preseta/edit/<?php echo $preseta['id']?>"><button class="btn btn-warning">Update</button></a>
     </td>

     <?php
     }?>
     </table>