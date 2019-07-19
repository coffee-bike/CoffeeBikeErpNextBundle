<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 17:02
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields\CustomFields;


trait AccountCategoryTrait
{
    /**
     * @var int
     */
    protected $account_category;

    /**
     * @return int
     */
    public function getAccountCategory(): int
    {
        return $this->account_category;
    }

    /**
     * @param int $account_category
     */
    public function setAccountCategory(int $account_category): void
    {
        $this->account_category = $account_category;
    }

}