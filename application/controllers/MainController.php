<?php

namespace Application\Controllers;

use Core\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('main-view.php');
    }

    public function actionStep()
    {
        $this->view->generate('step2-view.php');
    }

}
