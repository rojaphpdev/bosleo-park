<?php
namespace App\CarDetails;

use App\CarDetails\Painting;

class Car
{
 
 private $details;
 
 public function __construct(array $details)
 {
    $this->details = $details;
 }

 public function isBroken(): bool
 {
     foreach ($this->details as $detail) {
     if ($detail->isBroken()) {
     return true;
     }
     }
     return false;
 }
 
 public function isPaintingDamaged(): bool
 {
     foreach ($this->details as $detail) {
            if ($detail instanceof Painting && $detail->isBroken()) {
                return true;
            }
        }
        return false;
    }
 }

