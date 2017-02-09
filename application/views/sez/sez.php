<a href="/sez/add"><button class="btn btn-danger">Add</button></a>
<table class="table table-bordered">
    <tr class="title">
        <td>Id</td>
        <td>Section</td>
        <td>Action</td>

    </tr>
    <?php foreach ($sez as $sezs){?>
<tr>
<tr>
    <td><?php echo $sezs['id'] ?></td>
    <td><?php echo $sezs['sez']?></td>
    <td>
        <a href="/sez/delete/<?php echo $sezs['id']?>"><button class="btn btn-danger">Delete</button></a>
        <a href="/sez/edit/<?php echo $sezs['id']?>"><button class="btn btn-warning">Update</button></a>
    </td>

    <?php
    }?>
    </table>