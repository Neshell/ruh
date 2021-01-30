<?php


namespace Application\Controllers;

use Core\Controller;

class ConfigController extends Controller
{
    function actionIndex()
    {
        $this->view->generate('robot_config.php', 'template-view.php');
    }
}