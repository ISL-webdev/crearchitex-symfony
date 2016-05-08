<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller {
    /**
     * @Route("contact", name="contactpage")
     */
    public function indexAction() {
        return $this->render('default/contact.html.twig');
    }
}