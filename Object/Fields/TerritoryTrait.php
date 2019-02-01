<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:25
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TerritoryTrait
{
    /**
     * @var string
     */
    protected $territory;

    /**
     * @return string
     */
    public function getTerritory(): string
    {
        return $this->territory;
    }

    /**
     * @param string $territory
     */
    public function setTerritory(string $territory): void
    {
        $this->territory = $territory;
    }

}