<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $setFirstName;
    public $setLastName;
    public $setEmail;

    function setFirstName($setFirstName) {
        $this->setFirstName = $setFirstName;
        return $this;
    }

    function setLastName($setLastName) {
        $this->setLastName = $setLastName;
        return $this;
   }

   function setEmail($setEmail) {
        $this->setEmail = $setEmail;
        return $this;
    }

    function __toString() {
        //return "<{$this->setEmail}>";
        return sprintf('%s %s < %s >', $this->setFirstName, $this->setLastName, $this->setEmail);
    }
}
