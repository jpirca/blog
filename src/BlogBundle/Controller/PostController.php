<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController  extends Controller
{
    public function showAction($id)
    {
        $entityMapper = $this->getDoctrine()->getEntityManager();

        $post = $entityMapper->getRepository('BlogBundle:Post')->find($id);

        $comments = $entityMapper->getRepository('BlogBundle:Comment')
            ->getComments($post->getId());

        if (!$post) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('BlogBundle:Blog:show.html.twig', array(
            'post'      => $post,
            'comments'  => $comments
        ));
    }
}