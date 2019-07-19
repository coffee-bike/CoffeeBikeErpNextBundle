<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait NoticeTrait
{

    /**
     * @var string
     */
    protected $notice;

    /**
     * @return string
     */
    public function getNotice(): string
    {
        return $this->notice;
    }     

    /**
     * @param string $notice
     */
    public function setNotice(string $notice): void
    {
        $this->notice = $notice;
    }
}