<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 16:56
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle;


trait DefaultMaterialRequestTypeTrait
{
    static $purchase = 'Purchase';
    static $materialTransfer = 'Material Transfer';
    static $materialIssue = 'Material Issue';
    static $manufacture = 'Manufacture';

    /**
     * @var string
     */
    protected $default_material_request_type;

    /**
     * @return string
     */
    public function getDefaultMaterialRequestType(): string
    {
        return $this->default_material_request_type;
    }

    /**
     * @param string $default_material_request_type
     */
    public function setDefaultMaterialRequestType(string $default_material_request_type): void
    {
        $this->default_material_request_type = $default_material_request_type;
    }
}