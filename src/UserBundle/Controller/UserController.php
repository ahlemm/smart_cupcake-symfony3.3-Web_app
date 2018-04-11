<?php
/**
 * Created by PhpStorm.
 * User: Win10
 * Date: 01/03/2018
 * Time: 08:59
 */

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{
    public function AffpatissierAction()
    {


        $m=$this->getDoctrine()->getManager();
        $A=$m->getRepository('MyAppUserBundle:User')->findR("ROLE_patissier");


        return $this->render('C:\xampp\htdocs\symfony\pi\src\UserBundle\Resources\views\User\AffPatissier.html.twig',array('mark'=>$A));


    }
    public function AffClientsAction()
    {
        $m=$this->getDoctrine()->getManager();
        $A=$m->getRepository('UserBundle:User')->findR("ROLE_CLIENT");
        return $this->render('C:\xampp\htdocs\symfony\pi\src\UserBundle\Resources\views\User\AffClients.html.twig',array('mark'=>$A));
    }

}