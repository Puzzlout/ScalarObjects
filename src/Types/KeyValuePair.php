<?php

/**
 * Class KeyValuePair is the representation of an associative array.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package KeyValuePair
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace Puzzlout\Objects\Types;

use Puzzlout\Objects\Interfaces\IObject;

class KeyValuePair extends Object implements IObject {

    protected $key;

    public function GetClass() {
        parent::GetClass();
    }

    public function GetType() {
        parent::GetType();
    }

    public function IsValid() {
        parent::IsValid();
    }

}
