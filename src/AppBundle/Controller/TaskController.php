<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Task;
use AppBundle\Form\Type\TaskType;

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

        $newTask = new Task;

        $form = $this->createForm(new TaskType(),$newTask);
        //$form = $this->createForm(new TaskType(),$newTask);

        

        return $this->render('task/list.html.twig',[
                    'tasks' => $tasks,
                    'form' => $form->createView()
                ]);
    }

}
