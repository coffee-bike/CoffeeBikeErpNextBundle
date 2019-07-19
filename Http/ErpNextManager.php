<?php

namespace CoffeeBike\ErpNextBundle\Http;

use CoffeeBike\ErpNextBundle\Exception\LastPageReachedException;
use CoffeeBike\ErpNextBundle\Object\AbstractObject;
use CoffeeBike\ErpNextBundle\Object\AbstractObjectMapperTrait;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class ErpNextManager
{
    const FETCH_ALL = 1;
    const FETCH_NONE = 0;

    use AbstractObjectMapperTrait;

    /**
     * @var ErpNextHttpClient
     */
    private $erpNextHttpClient;

    /**
     * @param ErpNextHttpClient $erpHttpClient
     */
    public function __construct(ErpNextHttpClient $erpHttpClient)
    {
        $this->erpNextHttpClient = $erpHttpClient;
    }

    /**
     * @param AbstractObject $object
     */
    public function create(AbstractObject $object)
    {
        $response = $this->erpNextHttpClient->request(Request::METHOD_POST, $object);

        return $response;
    }

    /**
     * Updates the given Object in Salesforce.
     *
     * @param AbstractObject $object
     */
    public function update(AbstractObject $object)
    {
        $this->erpNextHttpClient->request(Request::METHOD_PUT, $object);
    }

    /**
     * Populates the given AbstractObject.
     *
     * @param AbstractObject $object
     *
     */
    public function find(AbstractObject $object): void
    {
        $this->mapToObject(
            $this->erpNextHttpClient->request(Request::METHOD_GET, $object),
            $object
        );
    }

    /**
     * @param AbstractObject $object
     * @param int $fetch
     *
     * @return AbstractObject[]
     */
    public function findCollection(AbstractObject $object, array $filters = null, int $fetch = ErpNextManager::FETCH_NONE): array
    {
        $collection = $this->erpNextHttpClient->request(Request::METHOD_GET, $object, $filters);

        $className = get_class($object);
        $objects =  [];
        foreach ($collection as $resource) {
            $object = new $className($resource->name);
            if (ErpNextManager::FETCH_ALL === $fetch) {
                $this->find($object);
            }

            $objects[] = $object;
        }

        return $objects;
    }
}
