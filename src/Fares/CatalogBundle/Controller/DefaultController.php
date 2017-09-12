<?php

namespace Fares\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FaresCatalogBundle:Default:index.html.twig');
    }
}
