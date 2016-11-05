<?php
namespace GuiCorpFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
    public function homepageAction($name)
    {
        $response = new Response(sprintf("Hello %s !", $name), 200,array('content-type'=> 'text/html'));
        return $response;
    }
}
