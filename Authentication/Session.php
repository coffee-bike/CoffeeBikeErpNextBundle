<?php

namespace CoffeeBike\ErpNextBundle\Authentication;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Session
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $created;

    /**
     * @param string $id
     * @param string $created
     */
    public function __construct(string $id, string $created)
    {
        $this->id = $id;
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return (new \DateTime($this->created))->diff(new \DateTime())->days > 2;
    }
}
