<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    public function listAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $tasks = $em->getRepository('AppBundle:Task')
                ->createQueryBuilder('t')
                ->where('t.finished = :finished')
                ->orderBy('t.dueDate','ASC')
                ->setParameter('finished',true)
                ->getQuery()
                ->getResult();
        
        return $this->render('task/list.html.twig',
                ['tasks' => $tasks]
                );
    }

}