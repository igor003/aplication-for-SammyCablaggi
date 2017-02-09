<h1>Регистрация</h1>
<div class="form_log">
    <div class="col-xs-4 col-xs-offset-4">
        <form action="<?=base_url('reg/do_reg')?>" method="post">
            <div class="form-group">
                <label for="usr">Логин</label>
                <input type="text" name="login" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="usr">Пароль</label>
                <input type="password" name="password" class="form-control" id="usr">
            </div>
            <button class=" btn btn-primary " type="submit" name="btn_log">Зарегистрироваться</button>
        </form>
    </div>
</div>
