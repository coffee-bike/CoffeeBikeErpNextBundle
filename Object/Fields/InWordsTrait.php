<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:17
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait InWordsTrait
{
    /**
     * @var string
     */
    protected $in_words;

    /**
     * @return string
     */
    public function getInWords(): string
    {
        return $this->in_words;
    }

    /**
     * @param string $in_words
     */
    public function setInWords(string $in_words): void
    {
        $this->in_words = $in_words;
    }

}