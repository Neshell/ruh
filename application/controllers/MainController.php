<?php

namespace Application\Controllers;

use Application\Models\MainModel;
use Core\Controller;

class MainController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new MainModel();
    }

    public function actionIndex()
    {
        $this->view->generate('main-view.php');

    }

    public function actionOneStep()
    {
        $this->model->registration($_POST['email'], $_POST['password'], $_POST['twoPassword']);
        $_SESSION['userEmail'] = $_POST['email'];
        header('Location: /main/stepTwo');
    }


    public function actionStepTwo()
    {
        var_dump($_SESSION);
        $this->view->generate('step2-view.php');
    }

    public function actionStepByStep()
    {
        var_dump($_SESSION);
        $this->model->registrationStepTwo($_POST['name'], $_POST['age'], $_POST['sex']);
        header('Location: /config');
    }

}
