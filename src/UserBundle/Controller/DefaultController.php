<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       return $this->redirectToRoute('fos_user_security_login');
    }


    /**
     * @Route("/logpage", name="logpage")
     */
    public function dashAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/dashAdmin.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/lockScreen", name="lockScreen")
     */
    public function lockAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/lock.html.twig');
    }
}
