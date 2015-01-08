<?php

namespace Itkg\LegacyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Itkg\LegacyBundle\Entity\DemoRepository")
 */
class Demo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="count", type="integer")
     */
    protected $count;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
}
