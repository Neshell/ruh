<?php

namespace Application\Controllers;

use Core\Controller;

class Error404Controller extends Controller
{

    function actionIndex()
    {
        $this->view->generate('404-view.php', 'template-view.php');
    }
}