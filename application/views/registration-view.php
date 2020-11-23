<form method="post" action="registration/registration">
    <h1>reg</h1>
    <div class="form-group">
        <input name="email" type="email" class="form-control" placeholder="Введіть вашу пошту" id="exampleInputEmail1"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input name="password" type="password" placeholder="Вигадайте пароль" class="password form-control" id="exampleInputPassword">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox1">Show Password

    </div>
    <div class="form-group">
        <input name="twoPassword" type="password" placeholder="Повторіть пароль " class="password form-control" id="exampleInputPassword1">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox2">Show Password
    </div>
    <div class="form-group">
        <select name="sex" class="custom-select form-control mr-sm-2" id="inlineFormCustomSelect">
            <option value="0" selected>Хлопчик</option>
            <option value="1">Дівчинка</option>
        </select>
    </div>
    <div class="form-group">
        <input name="name" type="text" class="form-control" placeholder="Імя робота"
               aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input name="age" type="number" class="form-control" placeholder="Ваш вік""
               aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Регістрація</button>
</form>
