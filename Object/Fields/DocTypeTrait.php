<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:47
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait DocTypeTrait
{
    /**
     * @var string
     */
    protected $doctype;

    /**
     * @return string
     */
    public function getDoctype(): string
    {
        return $this->doctype;
    }

    /**
     * @param string $doctype
     */
    public function setDoctype(string $doctype): void
    {
        $this->doctype = $doctype;
    }


}