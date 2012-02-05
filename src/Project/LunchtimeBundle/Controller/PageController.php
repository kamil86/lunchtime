<?php


namespace Project\LunchtimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectLunchtimeBundle:Page:index.html.twig');
    }
	  public function aboutAction()
    {
        return $this->render('ProjectLunchtimeBundle:Page:about.html.twig');
    }
	public function contactAction()
{
    return $this->render('ProjectLunchtimeBundle:Page:contact.html.twig');
}
}