<?php

namespace ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ProductoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/producto{id}")
     */
    public function productoAction($id='0')
    {
        return $this->render('ProductoBundle:Default:producto.html.twig', array('id'=>$id));
    }

}
