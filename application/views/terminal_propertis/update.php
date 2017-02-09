<form action="/terminal_propertis/update/<? echo $id_term_prop['id']?>" method="post">
<!--    --><?php //echo $_GET['$terminal_propertis'];?>
    <div class="form-group">
        <label for="sel1">Mini</label>
        <select name="mini" class="form-control" id="sel1">
            <?php
            foreach( $oll_mini as $one_nr_mini	){
                echo"<option value=". $one_nr_mini['id']."". ($id_term_prop['id_nr_mini'] == $one_nr_mini['id'] ? "selected='selected'" : "" ).">". $one_nr_mini['nr_mini']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sel1">Terminal:</label>
        <select name="terminal" class="form-control" id="sel1">
            <?php
            foreach( $oll_terminal as $one_terminal	){
                echo"<option value=".$one_terminal['id']." ". ($id_term_prop['id_terminal']==$one_terminal['id'] ? "selected='selected'" : "" ).">".$one_terminal['Terminal']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="sel1">Preseta nr</label>
        <select name="preseta" class="form-control" id="sel1">
            <?php
            foreach( $oll_preseta as $one_nr_presetei	){
                echo"<option value=". $one_nr_presetei['id']." ". ($id_term_prop['id_nr_presetei'] == $one_nr_presetei['id'] ? "selected='selected'" : "" ).">". $one_nr_presetei['nr_presetei']."</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="sel1">Sez</label>
        <select name="sez" class="form-control" id="sel1">
            <?php

            foreach( $oll_sez as $one_sez	){
                echo"<option value=". $one_sez['id']." ". ($id_term_prop['id_sez'] == $one_sez['id'] ? "selected='selected'" : "" ).">". $one_sez['sez']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Calibrarea sus</span>
        <input name="updated_calibrarea_sus" type="text" value="<?php echo $id_term_prop['calibrarea_sus']?>" class="form-control"  aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Calibrarea jos</span>
        <input name="updated_calibrarea_jos" type="text" value="<?php echo $id_term_prop['calibrarea_jos']?>" class="form-control"  aria-describedby="basic-addon1">
    </div>
    <br>
    <button class="btn btn-primary " type="submit" name="submit_updated_date">Отправить</button>
</form>