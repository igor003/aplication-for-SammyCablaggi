
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="/terminal/update/<?php echo $terminal['id']?>" method="post">
                <div class="input-group ">
                    <label for="terminal"></label>
                    <input value="<?php echo $terminal['Terminal']?>"
                           name='terminal' type="text"
                           class="form-control"
                           placeholder="terminal"
                           aria-describedby="basic-addon1">
                </div>
                <br>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>