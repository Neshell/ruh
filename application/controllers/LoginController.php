<?php

namespace Application\Controllers;

use Application\Models\RegistrationModel;
use Core\Controller;
use Application\Models\LoginModel;

class LoginController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new LoginModel();
    }

    public function actionIndex()
    {
        $this->view->generate('login-view.php', 'template-view.php');
    }

    public function actionLogin()
    {
        $this->model->login($_POST['email'], $_POST['password']);
        header('Location: /config');

    }

}