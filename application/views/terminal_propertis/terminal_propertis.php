<a href="/terminal_propertis/add"><button class="btn btn-danger">Add</button></a>
<table class="table table-bordered">
    <tr class="title">
        <td>Id</td>
        <td>Preseta</td>
        <td>Miniaplicators</td>
        <td>Terminal</td>
        <td>Section</td>
        <td>Calibrarea sus</td>
        <td>Calibrarea jos</td>
        <td>Action</td>
    </tr>
    <?php foreach ($terminal_prop as $terminal_propertis){?>
<tr>
<tr>
    <td><?php echo $terminal_propertis['id'] ?></td>
    <td><?php echo $terminal_propertis['nr_presetei']?></td>
    <td><?php echo $terminal_propertis['nr_mini']?></td>
    <td><?php echo $terminal_propertis['Terminal']?></td>
    <td><?php echo $terminal_propertis['sez']?></td>
    <td><?php echo $terminal_propertis['calibrarea_sus']?></td>
    <td><?php echo $terminal_propertis['calibrarea_jos']?></td>


    <td>
        <a href="/terminal_propertis/delete/<?php echo $terminal_propertis['id']?>"><button class="btn btn-danger">Delete</button></a>
        <a href="/terminal_propertis/edit/<?php echo $terminal_propertis['id']?>"><button class="btn btn-warning">Update</button></a>
    </td>

    <?php
    }?>
    </table>