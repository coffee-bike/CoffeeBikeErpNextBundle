<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait PaymentTermsTrait
{

    /**
     * @var string
     */
    protected $payment_terms;

    /**
     * @return string
     */
    public function getPaymentTerms(): string
    {
        return $this->payment_terms;
    }     

    /**
     * @param string $payment_terms
     */
    public function setPaymentTerms(string $payment_terms): void
    {
        $this->payment_terms = $payment_terms;
    }
}