
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="/mini/update/<?php echo $mini['id']?>" method="post">
                <div class="input-group ">
                    <label for="mini"></label>
                    <input value="<?php echo $mini['nr_mini']?>"
                           name='new_mini' type="text"
                           class="form-control"
                           placeholder="mini"
                           aria-describedby="basic-addon1">
                </div>
                <br>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>