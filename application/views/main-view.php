<form method="post" action="main/step">
    <h1>Реєстрація</h1>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Введіть вашу пошту" id="exampleInputEmail1"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="password" placeholder="Вигадайте пароль" class="password form-control" id="exampleInputPassword">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox1">Show Password

    </div>
    <div class="form-group">
        <input type="password" placeholder="Повторіть пароль " class="password form-control" id="exampleInputPassword1">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox2">Show Password

    </div>
    <div class="form-group">
        <select class="custom-select form-control mr-sm-2" id="inlineFormCustomSelect">
            <option value="0" selected>Хлопчик</option>
            <option value="1">Дівчинка</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Імя робота"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Ваш вік""
        aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Регістрація</button>
</form>
