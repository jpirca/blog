<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController  extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Blog:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('BlogBundle:Blog:about.html.twig');
    }

}