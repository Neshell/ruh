<?php

namespace Application\Controllers;

use Core\Controller;

class AboutUsController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('about-us-view.php', 'template-view.php');
    }

}