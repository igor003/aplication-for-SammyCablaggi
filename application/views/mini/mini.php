<a href="/mini/add"><button class="btn btn-danger">Add</button></a>
<table class="table table-bordered">
    <tr class="title">
        <td>Id</td>
        <td>miniaplicator</td>
        <td>Action</td>
    </tr>
    <?php foreach ($mini as $minis){?>
<tr>
<tr>
    <td><?php echo $minis['id'] ?></td>
    <td><?php echo $minis['nr_mini']?></td>
    <td>
        <a href="/mini/delete/<?php echo $minis['id']?>"><button class="btn btn-danger">Delete</button></a>
        <a href="/mini/edit/<?php echo $minis['id']?>"><button class="btn btn-warning">Update</button></a>
    </td>

    <?php
    }?>
    </table>