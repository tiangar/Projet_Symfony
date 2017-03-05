<?php

namespace Site\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteMainBundle:Default:index.html.twig');
    }

    public function  annonceAction()
    {
        return $this->render('SiteMainBundle:Default:annonce.html.twig');
    }
}
