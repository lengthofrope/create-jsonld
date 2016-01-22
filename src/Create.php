<?php

namespace LengthOfRope\JSONLD;

/**
 * Description of Create
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
class Create
{

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Create(-1 * $this->amount);
    }

}
