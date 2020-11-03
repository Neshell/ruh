<?php

namespace Application\Controllers;

use Core\Controller;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('login-view.php', 'template-view.php');
    }

}