
<a href="/terminal/add"><button class="btn btn-danger">Add</button></a>
<table class="table table-bordered">
    <tr class="title">
        <td>Id</td>
        <td>Terminal</td>
        <td>Action</td>

    </tr>
    <?php foreach ($termin as $terminale){?>
<tr>
<tr>
    <td><?php echo $terminale['id'] ?></td>
    <td><?php echo $terminale['Terminal']?></td>
    <td>
        <a href="/terminal/delete/<?php echo $terminale['id']?>"><button class="btn btn-danger">Delete</button></a>
        <a href="/terminal/edit/<?php echo $terminale['id']?>"><button class="btn btn-warning">Update</button></a>
    </td>

    <?php
    }?>
    </table>