<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipeController extends Controller {
    /**
     * Class EquipeController
     * @package AppBundle\Controller
     * @Route("/equipe", name="equipepage")
     */
    public function indexAction() {
        $db = $this->getDoctrine()->getManager();
        $users = $db->getRepository('AppBundle:Team')->findAll();

        return $this->render('default/equipe.html.twig', compact('users'));
    }
}
