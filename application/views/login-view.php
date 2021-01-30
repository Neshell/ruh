<form method="post" action="/login/login">
    <h1>login</h1>
    <div class="form-group">
        <input name="email" type="email" class="form-control" placeholder="Введіть email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group" >
        <input name="password" type="password" placeholder="пароль" class="password form-control" id="exampleInputPassword1">
        <input type="checkbox" onclick="myFunction(this.id)" id="checkbox1">Show Password

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="errorBox">
    <?php
        if ($_SESSION['message']) {
            echo '<p>'.$_SESSION['message'].'</p>';
        }
        unset($_SESSION['message'])
    ?>
</div>