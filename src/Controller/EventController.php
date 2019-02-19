<?php

namespace App\Controller;

use App\Entity\Events;
use App\Entity\Organizer;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Events::class);

        $events = $repo->findAll();

        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
            'events' => $events,
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('event/home.html.twig', [
            'title' => 'Bienvenue',
            'description' => 'description de teste',
        ]);
    }

/**
 * @Route("/event/{id}", name="blog_show")
 */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Events::class);

        $events = $repo->find($id);

        return $this->render('event/show.html.twig', [
            'events' => $events
        ]);
    }

    /**
     * @Route("/organisateur", name="organisateur")
     */
    public function organizer()
{
    $repo = $this->getDoctrine()->getRepository(Organizer::class);

    
    $organizer = $repo->findAll();

        return $this->render('event/organizer.html.twig', [
            'organizer' => $organizer,
        ]);
    }
/**
 * @Route("/newEvent", name="newEvent")
 */
    public function newEvent(Request $request, ObjectManager $manager)
    {
        $events = new Events();

        $form = $this->createFormBuilder($events)
                    ->add('nom')
                    ->add('dateStart')
                    ->add('dateEnd')
                    
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            

            $manager->persist($events);
            $manager->flush();

        return $this->redirectToRoute('blog_show', ['id'=> $events->getId()]);
                    }

        return $this->render('event/newEvent.html.twig', [
            'formEvents' =>$form->createView()
        ]);
    }
}