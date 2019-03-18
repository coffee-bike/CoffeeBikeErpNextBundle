<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 13:43
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Service;


use CoffeeBike\ErpNextBundle\Http\ErpNextManager;
use CoffeeBike\ErpNextBundle\Http\Filter;
use CoffeeBike\ErpNextBundle\Object\Customer;

class CustomerService
{
    /**
     * @var ErpNextManager
     */
    private $erp;

    /**
     * CustomerService constructor.
     *
     * @param ErpNextManager $erp
     */
    public function __construct(ErpNextManager $erp)
    {
        $this->erp = $erp;
    }

    public function getCustomer(string $customerId)
    {
        $customer = null;

        /*
         * Get customer name
         */
        $filters = [new Filter('Customer', 'kunde_nr', '=', $customerId)];
        $customers = $this->erp->findCollection(new Customer(), $filters, ErpNextManager::FETCH_NONE);

        if (isset($customers[0])) {
            $customerName = $customers[0]->getName();

            /*
             * Get Customer object
             */
            $customer = new Customer($customerName);
            $this->erp->find($customer);
        }

        return $customer;
    }

}