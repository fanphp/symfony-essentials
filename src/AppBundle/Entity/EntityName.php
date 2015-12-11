<?php

/**
 * @author ferrantelli
 */
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="todo_tag")
 */
class EntityName
{

    /**
     * @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")


     *


     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */


    private $id;

    /**
     * @ORM\Column(type="string",length=255)

     *
     */
    private $name;

}
