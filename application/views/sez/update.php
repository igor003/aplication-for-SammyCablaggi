<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="/sez/update/<?php echo $sez['id']?>" method="post">
                <div class="input-group ">
                    <label for="mini"></label>
                    <input value="<?php echo $sez['sez']?>"
                           name='new_sez' type="text"
                           class="form-control"
                           placeholder="sez"
                           aria-describedby="basic-addon1">
                </div>
                <br>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>