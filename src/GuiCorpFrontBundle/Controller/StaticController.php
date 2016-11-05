<?php
namespace GuiCorpFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
    public function homepageAction()
    {
       $name ='World' ;
       return $this->render(
               'GuiCorpFrontBundle:Static:homepage.html.twig',
               array('name' => $name)
               );
    }
}
