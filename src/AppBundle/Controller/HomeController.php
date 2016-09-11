<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

  /**
  * @Route("home/main")
  */

  public function mainDisplay()
  {
    $html = $this->container->get('templating')->render('home/main.html.twig');

    return new Response($html);
  }
}