<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Item
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
     * @var string
     *
     * @ORM\Column(name="choiceField", type="string", length=255)
     */
    private $choiceField;


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
     * Set choiceField
     *
     * @param string $choiceField
     * @return Item
     */
    public function setChoiceField($choiceField)
    {
        $this->choiceField = $choiceField;

        return $this;
    }

    /**
     * Get choiceField
     *
     * @return string
     */
    public function getChoiceField()
    {
        return $this->choiceField;
    }
}
