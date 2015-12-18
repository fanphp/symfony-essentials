<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Tag;

/**
 * @author ferrantelli
 */
class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager) {
        $tags = ['company', 'home'];
        
        foreach ($tags as $tag) {
            $obj = new Tag();
            $obj->setName($tag);
            $manager->persist($obj);
            $this->addReference('tag:' . $tag,$obj);
        }

        $manager->flush();

        //add object as reference to use later
        

        
    }


    public function getOrder() {
        return 1;
    }


}
