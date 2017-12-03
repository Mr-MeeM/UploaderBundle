<?php

namespace Systeo\UploaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SysteoUploaderBundle:Default:index.html.twig');
    }
}
