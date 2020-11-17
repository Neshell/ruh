<form method="post" action="main/oneStep">
<!--    action="main/twoStep"-->
    <h1>Реєстрація</h1>
    <?php echo $data;?>
    <div class="form-group">
        <input name="email" type="email" class="form-control" placeholder="Введіть вашу пошту" id="exampleInputEmail1"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input name="password" type="password" placeholder="Вигадайте пароль" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <input name="twoPassword" type="password" placeholder="Повторіть пароль " class="form-control" id="exampleInputPassword1">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Регістрація</button>
</form>
