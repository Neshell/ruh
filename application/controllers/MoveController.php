<?php

namespace Application\Controllers;

use Core\Controller;

class MoveController extends Controller
{

    function actionIndex()
    {
        $this->view->generate('robot_move-view.php', 'template-view.php');
    }
}