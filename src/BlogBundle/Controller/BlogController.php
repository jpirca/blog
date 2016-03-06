<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController  extends Controller
{
    public function indexAction()
    {
        $entityMapping = $this->getDoctrine()
            ->getEntityManager();

        $posts = $entityMapping->getRepository('BlogBundle:Post')
            ->getLatestPosts();

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts
        ));
    }
    public function aboutAction()
    {
        return $this->render('BlogBundle:Blog:about.html.twig');
    }

}