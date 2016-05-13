<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projects;
use AppBundle\Entity\ProjectsCategories;
use AppBundle\Form\TitreDescription;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;

class ProjectsController extends Controller {
    private $projects;

    /**
     * @Route("projets", name="projetspage")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $this->projects = $em->getRepository('AppBundle:Projects')->findAll();

        return $this->render('default/projets/index.html.twig', ['projects' => $this->projects]);
    }

    /**
     * @Route("projets/add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $projets = new Projects();
        $projets->setDateProjet(new \DateTime('today'));

        $db = $this->getDoctrine()->getManager();
        $cats = $db->getRepository('AppBundle:ProjectsCategories')->findAll();

        $form = $this->createForm(TitreDescription::class, $projets);

        // le nom du champs doit correspondre au nom de la propriété dans la classe Projects
        $form->add('categorie', ChoiceType::class, [
            'choices' => $cats,
            'choice_label' => function(ProjectsCategories $categorie, $key, $index){
                return $categorie->getName();
            }
        ])
            ->add('photo', FileType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $db->persist($form->getData());
            $db->flush();
            $this->addFlash('notice', 'Projet Ajouté!');

            return $this->redirectToRoute('projetspage');
        }

        return $this->render('default/projets/create.html.twig', [
            'projets' => $this->projects,
            'form' => $form->createView()
        ]);
    }
}
