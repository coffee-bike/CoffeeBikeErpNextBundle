<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 14:14
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait CustomerNoTrait
{
    /**
     * @var string
     */
    protected $kunde_nr;

    /**
     * @return string
     */
    public function getKundeNr(): string
    {
        return $this->kunde_nr;
    }

    /**
     * @param string $kunde_nr
     */
    public function setKundeNr(string $kunde_nr): void
    {
        $this->kunde_nr = $kunde_nr;
    }

}