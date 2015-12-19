<?php

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Task;

/**
 * @author ferrantelli
 */
class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $obj= new Task();
        $obj->setName('example task')
            ->setNotes("nota di esempio")
            ->setCreatedAt(new \DateTime())
            ->setFinished(true)
            ->addTag($this->getReference('tag:home'))
            ->addTag($this->getReference('tag:company'));


        $manager->persist($obj);
        $manager->flush();
    }


    public function getOrder() {
        return 10;
    }

}
