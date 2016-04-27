<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('layout.html.twig');
    }

    /**
    * @Route("/seccion1", name="seccion1")
    */    
    public function seccion1Action(){

        return $this->render('AppBundle::seccion1.html.twig');
    }

    /**
    * @Route("/seccion2", name="seccion2")
    */    
    public function seccion2Action(){

        return $this->render('AppBundle::seccion2.html.twig');
    }

    /**
    * @Route("/seccion3", name="seccion3")
    */    
    public function seccion3Action(){

        return $this->render('AppBundle::seccion3.html.twig');
    }        

    /**
    * @Route("/usuarios", name="usuarios")
    */
    public function usuariosAction(){
        
        $array[] = array('nombre' => "pepe");
        $array[] = array('nombre' => "john");
        $array[] = array('nombre' => "peter");

        return $this->render('AppBundle::usuarios.html.twig', array('usuarios' => $array));
    }

    /**
     * @Route("/redirect/{option}", name="redirect")
     */
    public function redirectAction(Request $request, $option)
    {
        if($option == 'Route') {

            $this->addFlash('notice', 'esto es una señal.');
            return $this->redirectToRoute('homepage');
        }else{

            throw new \Exception('No es route.');
        }
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }    

    /**
     * @Route("/", name="homepage2")
     */
    public function helloAction(Request $request)
    {
        return new Response("Hola.");
    }    
}
