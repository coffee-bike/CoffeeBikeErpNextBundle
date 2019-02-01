<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:41
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TitleTrait
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}