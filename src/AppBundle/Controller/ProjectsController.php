<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projects;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\ProjectsCategories;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

        $form = $this->createFormBuilder($projets)
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('projet_categorie_id', ChoiceType::class, [
                'choices' => $cats,
                'choices_as_values' => true,
                'choice_label' => function($val, $key, $index) {
                    return $val->getCategorie();
                },
            ])
            ->add('photo', FileType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

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
