<?php
// src/Blogger/BlogBundle/Controller/BlogController.php
namespace Project\LunchtimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Event controller.
 */
class EventController extends Controller
{
    /**
     * Show a Event entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $event = $em->getRepository('ProjectLunchtimeBundle:Event')->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Unable to find Event post.');
        }

        return $this->render('ProjectLunchtimeBundle:Event:show.html.twig', array(
            'event'      => $event,
        ));
    }
}