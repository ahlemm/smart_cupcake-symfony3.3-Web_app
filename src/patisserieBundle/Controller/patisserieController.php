<?php

namespace patisserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EspritBundle\Form\PatisserieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class patisserieController extends Controller
{
    public function AjouterAction(Request $request)
    {
        $patisserie = new patisserie();

        $form = $this->createForm(PatisserieType::class, $patisserie);
        $form->handleRequest($request);
        if ($form->isvalid()) {
            $cnx = $this->getDoctrine()->getManager();
            $cnx->persist(patisserie);
            $cnx->flush();
            return new Response('patisserie ajouté avec succées');
        }
        return $this->render('patisserieBundle:Default:Ajout_patisserie.html.twig', array('form' => $form->createview()));
    }









}
