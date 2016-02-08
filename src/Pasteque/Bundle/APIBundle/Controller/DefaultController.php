<?php

namespace Pasteque\Bundle\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PastequeAPIBundle:Default:index.html.twig');
    }
}
