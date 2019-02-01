<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:23
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TermsTrait
{
    /**
     * @var string
     */
    protected $terms;

    /**
     * @return string
     */
    public function getTerms(): string
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     */
    public function setTerms(string $terms): void
    {
        $this->terms = $terms;
    }

}