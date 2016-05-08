<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller {
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("news", name="newspage")
     */
    public function indexAction() {
        $em   = $this->getDoctrine()->getManager();
        $news = $em->getRepository('AppBundle:News')->findAll();

        return $this->render('default/news.html.twig', compact('news'));
    }
}