<?php
$errors =  $this->session->flashdata('errors');
if($errors){
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $errors?>
    </div>
    <?php
}
?>
<form action="<?=base_url('/terminal_propertis/insert')?>" method="post">
    <div class="form-group">
        <label for="sel1">Mini</label>

        <select name="mini" class="form-control" id="sel1">
            <option value="" selected></option>
            <?php
            foreach( $oll_mini as $one_nr_mini	){
                echo"<option value=" . $one_nr_mini['id'] . ">". $one_nr_mini['nr_mini']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sel1">Terminal:</label>
        <select name="terminal"value="terminal" class="form-control" id="sel1">
            <option value="" selected></option>
            <?php
            foreach( $oll_terminal as $one_terminal	){
                echo"<option value=".$one_terminal['id'].">".$one_terminal['Terminal']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sel1">Preseta nr</label>
        <select name="preseta"value="terminal" class="form-control" id="sel1">
            <option value="" selected></option>
            <?php
            foreach( $oll_preseta as $one_nr_presetei	){
                echo"<option value=". $one_nr_presetei['id'].">". $one_nr_presetei['nr_presetei']."</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="sel1">Sez</label>
        <select name="sez"value="terminal" class="form-control" id="sel1">
            <option value="" selected></option>
            <?php
            foreach( $oll_sez as $one_sez	){
                echo"<option value=". $one_sez['id'].">". $one_sez['sez']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Calibrarea sus</span>
        <input name="updated_calibrarea_sus" type="text" value="" class="form-control"  aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Calibrarea jos</span>
        <input name="updated_calibrarea_jos" type="text" value="" class="form-control"  aria-describedby="basic-addon1">
    </div>
    <br>
    <button class="btn btn-primary " type="submit" name="submit_updated_date">Отправить</button>
</form>