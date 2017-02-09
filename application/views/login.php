<h1>Залогиниться</h1>
<div class="form_log">
    <div class="col-xs-4 col-xs-offset-4">
        <form action="<?=base_url('/login/do_login')?>" method="post">
            <div class="form-group">
                <label for="usr">Логин</label>
                <input type="text" name="login_log" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="usr">Пароль</label>
                <input type="password" name="password_log" class="form-control" id="usr">
            </div>
            <button class=" btn btn-primary " type="submit" name="btn_log">Войти</button>
        </form>
    </div>
</div>
