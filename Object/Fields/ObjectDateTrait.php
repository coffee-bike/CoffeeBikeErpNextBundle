<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 11:30
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ObjectDateTrait
{
    /**
     * @var string
     */
    protected $creation;

    /**
     * @var string
     */
    protected $modified;

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public function getCreation(): \DateTime
    {
        return new \DateTime($this->creation);
    }

    /**
     * @param string $creation
     */
    public function setCreation(string $creation): void
    {
        $this->creation = $creation;
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public function getModified(): \DateTime
    {
        return new \DateTime($this->modified);
    }

    /**
     * @param string $modified
     */
    public function setModified($modified): void
    {
        $this->modified = $modified;
    }


}