<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 15:03
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object;


use CoffeeBike\ErpNextBundle\Object\Fields\LanguageTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\SourceNameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TargetNameTrait;

class Translation extends AbstractObject
{
    use LanguageTrait;
    use SourceNameTrait;
    use TargetNameTrait;

    public function __construct(string $language, string $sourceName, string $targetName)
    {
        $this->setLanguage($language);
        $this->setSourceName($sourceName);
        $this->setTargetName($targetName);

        parent::__construct();
    }

    public function getSubObjectClass(string $property)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        // TODO: Implement getResourceName() method.
        return 'Translation';
    }

    /**
     * @return array
     */
    public function getWriteProtectedFields(): array
    {
        return [];
    }
}