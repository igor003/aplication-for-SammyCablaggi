<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="/preseta/update/<?php echo $preseta['id']?>" method="post">
                <div class="input-group ">
                    <label for="mini"></label>
                    <input value="<?php echo $preseta['nr_presetei']?>"
                           name='new_preseta' type="text"
                           class="form-control"
                           placeholder="preseta"
                           aria-describedby="basic-addon1">
                </div>
                <br>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>