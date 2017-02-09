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
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <form action="<?=base_url('/preseta/insert')?>" method="post">
            <div class="input-group ">
                <label for="new_terminal">Preseta</label>
                <input name="new_preseta"
                       type="text"
                       class="form-control"
                       placeholder="Preseta"
                       aria-describedby="basic-addon1">
            </div>
            <br>
            <button class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>
