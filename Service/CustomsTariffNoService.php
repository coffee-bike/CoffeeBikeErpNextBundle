<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-19
 * Time: 11:19
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Service;


class CustomsTariffNoService
{
    public function __construct()
    {
    }

    public function getDescription($customTariffNo)
    {
        $html = new \DOMDocument();
        @$html->loadHTMLFile(sprintf('https://www.zolltarifnummern.de/2019/%s', $customTariffNo));

        $desc_de = null;
        $desc_en = null;
        $desc_fr = null;


        // Get german translation
        /** @var \DOMElement $element */
        foreach ($html->getElementsByTagName('span') as $element) {
            if ($element->getAttribute('itemprop') == 'description') {
                $desc_de = $element->nodeValue;
            }
        }
        // Get english and french translation
        /** @var \DOMElement $element */
        foreach ($html->getElementsByTagName('button') as $element) {
            if (substr($element->getAttribute('onclick'), 0, 41 ) == 'callModal( \'Warenbeschreibung in Englisch') {
                $desc_en_tmp = explode('\'', $element->getAttribute('onclick'));
                $desc_en = $desc_en_tmp[3];
            } else if (substr($element->getAttribute('onclick'), 0, 45 ) == 'callModal( \'Warenbeschreibung in Französisch') {
                $desc_fr_tmp = explode('\'', $element->getAttribute('onclick'));
                $desc_fr = $desc_fr_tmp[3];
            }
        }


        return [
            'de' => trim($desc_de),
            'en' => trim($desc_en),
            'fr' => trim($desc_fr),
        ];
    }
}