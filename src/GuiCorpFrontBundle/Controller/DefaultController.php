<?php

namespace GuiCorpFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuiCorpFrontBundle:Default:index.html.twig');
    }
}
