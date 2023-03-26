<?php
namespace App\CarDetails;

abstract class CarDetail {

    protected $isBroken;

    public function __construct(bool $isBroken)
    {
         $this->isBroken = $isBroken;
    }

    public function isBroken(): bool
    {
     return $this->isBroken;
    }
}