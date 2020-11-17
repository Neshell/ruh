<form method="post" action="main/step">
    <h1>reg</h1>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Введіть вашу пошту" id="exampleInputEmail1"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="password" placeholder="Вигадайте пароль" class="password form-control" id="exampleInputPassword1">

        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox1">Show Password
    </div>
    <div class="form-group">
        <input type="password" placeholder="Повторіть пароль " class="password form-control" id="exampleInputPassword2">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox2">Show Password

    </div>
    <button type="submit" class="btn btn-primary">Регістрація</button>
</form>
