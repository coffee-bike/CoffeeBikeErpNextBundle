<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:43
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseInWordsTrait
{
    /**
     * @var string
     */
    protected $base_in_words;

    /**
     * @return string
     */
    public function getBaseInWords(): string
    {
        return $this->base_in_words;
    }

    /**
     * @param string $base_in_words
     */
    public function setBaseInWords(string $base_in_words): void
    {
        $this->base_in_words = $base_in_words;
    }


}