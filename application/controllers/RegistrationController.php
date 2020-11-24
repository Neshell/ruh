<?php

namespace Application\Controllers;

use Application\Models\RegistrationModel;
use Core\Controller;

class RegistrationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new RegistrationModel();
    }

    public function actionIndex()
    {
        $this->view->generate('registration-view.php');

    }

    public function actionRegistration()
    {
        $this->model->registration($_POST['email'], $_POST['password'], $_POST['twoPassword'], $_POST['name'], $_POST['age'], 1);
        header('Location: /config');
    }


}