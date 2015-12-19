<?php
/**
 * @author ferrantelli
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class TaskType extends AbstractType
{


    public function getName()
    {
        return 'task';
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name','money')
                ->add('notes')
                ->add('dueDate')
                ->add('add','submit',['label'=>'Add Task'])
                ;

        //parent::buildForm($builder, $options);
    }


    public function configureOptions(OptionsResolver $resolver )
    {
        //$resolver->setDefaults( ['data_class' => 'AppBundle\Entity\Task'] );
        $resolver->setDefaults( ['name' => 'www.google.it'] );

    }
}
