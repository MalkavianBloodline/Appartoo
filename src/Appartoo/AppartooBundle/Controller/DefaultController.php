<?php

namespace Appartoo\AppartooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {   
        return $this->render('AppartooBundle:Default:index.html.twig');
    }
    public function firstTestAction()
    {   
        return $this->render('AppartooBundle:Default:first.html.twig');
    }
    public function secondTestAction()
    {   
        return $this->render('AppartooBundle:Default:second.html.twig');
    }
}
