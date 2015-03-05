<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use AppBundle\Form\ItemType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $item = new Item();
        $form = $this->createForm(new ItemType(), $item);

        if ($form->handleRequest($request)->isValid()) {
            $em->persist($item);
            $em->flush();

            return $this->redirect($this->generateUrl('homepage'));
        }

        $items = $em->getRepository('AppBundle:Item')->findAll();

        return $this->render('default/index.html.twig', array(
            'form'  => $form->createView(),
            'items' => $items
        ));
    }
}
