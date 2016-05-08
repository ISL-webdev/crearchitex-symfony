<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projects;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectsController extends Controller {
    /**
     * @Route("projets", name="projectspage")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('AppBundle:Projects')->findAll();

        return $this->render('default/projects.html.twig', compact('projects'));
    }

}
