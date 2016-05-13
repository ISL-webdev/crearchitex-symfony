<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use AppBundle\Form\TitreDescription;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller {
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("news", name="newspage")
     */
    public function indexAction() {
        $db = $this->getDoctrine()->getManager();
        $news = $db->getRepository('AppBundle:News')->findAllSortedByDate();

        return $this->render('default/news/news.html.twig', compact('news'));
    }

    /**
     * @Route("news/add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $news = new News();
        $news->setDateNews(new \DateTime('today'));

        $form = $this->createForm(TitreDescription::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $db = $this->getDoctrine()->getManager();
            $db->persist($form->getData());
            $db->flush();
            $this->addFlash('notice', 'Article ajouté!');

            return $this->redirectToRoute('newspage');
        }

        return $this->render('default/news/create.html.twig', ['form' => $form->createView()]);
    }
}
