<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Main:index.html.twig', array(
                // ...
            ));
    }

}

//url http://laravel.dev/web/app_dev.php/index
