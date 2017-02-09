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
        <form action="<?=base_url('/mini/insert')?>" method="post">
            <div class="input-group ">
                <label for="new_terminal">Mini</label>
                <input name="new_mini"
                       type="text"
                       class="form-control"
                       placeholder="Mini"
                       aria-describedby="basic-addon1">
            </div>
            <br>
            <button class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>
