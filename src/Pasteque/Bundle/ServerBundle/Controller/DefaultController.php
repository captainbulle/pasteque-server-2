<?php

namespace Pasteque\Bundle\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PastequeServerBundle:Default:index.html.twig');
    }
}
